import warnings
import PyPDF2
import os
import sys
import json
from sqlalchemy import create_engine
def extract_pdf_to_list(path, file_name):
    """
    input : path of file
    output : list of pages contains string, one index is one page
    """
    doc = []
    fin = open(os.path.join(path, file_name), "rb")
    reader = PyPDF2.PdfFileReader(fin)
    for page_num in range(reader.getNumPages()):
        doc.append(reader.getPage(page_num).extractText().replace('\n', ''))
    return doc
def access_all(path):
    documents = []
    directory = os.fsencode(path)
    for file in os.listdir(directory):
        filename = os.fsdecode(file)
        if filename.endswith(".pdf"):
            doc = extract_pdf_to_list(path, filename)
            documents.append(doc[0])
    return documents
if __name__ == '__main__':
    warnings.filterwarnings("ignore")
    documents = access_all(sys.argv[1])
    try:
        engine = create_engine('mysql://root@localhost/db_base?utf8mb4')
        for doc in documents:
            doc = doc.replace("'", "\t")
            doc = doc.replace('""', "\t")
            doc = doc.replace("%", "%%")
            query = 'INSERT INTO tb_tugas_akhir (abstract) VALUE ( "{0}" )'.format(doc)
            engine.execute(query)

        print("SUCCESS")
        pass
    except Exception as e:
        print(e)
        raise
    # stopwords = stopwords_id('', sys.argv[2])
    # print(stopwords)
    # q = 'geodesi lalalala'
    # lsi = LSI(documents, q)
    # ranking = lsi.process()
    # print(json.dumps(ranking.tolist()))
    # lsi.index_to_db()
