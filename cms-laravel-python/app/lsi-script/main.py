from lsi import LSI
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
def stopwords_id(path, file_name):
    stopwords = []
    f = open(os.path.join(path, file_name), "rb")
    for word in f:
        stopwords.append(word.strip().decode("utf-8"))
    return stopwords
if __name__ == '__main__':
    warnings.filterwarnings("ignore")
    try:
        engine = create_engine('mysql://sql12324137:SAGVuJCnS5@sql12.freemysqlhosting.net/sql12324137?charset=utf8mb4')
        query = "SELECT abstract FROM tb_tugas_akhir"
        resultproxy = engine.execute(query)
        d, a = {}, []
        for rowproxy in resultproxy:
            # rowproxy.items() returns an array like [(key0, value0), (key1, value1)]
            for column, value in rowproxy.items():
                # build up the dictionary
                d = {**d, **{column: value}}
            a.append(d)
        documents = [d['abstract'] for d in a]
        stopwords = stopwords_id('', sys.argv[1])
        # print(stopwords)
        q = sys.argv[2]
        lsi = LSI(documents, q, stopwords=stopwords, rank_approximation=len(documents))
        ranking = lsi.process()
        print(json.dumps(ranking.tolist()))
        # lsi.index_to_db()

        # print("SUCCESS")
        pass
    except Exception as e:
        print(e)
        raise
