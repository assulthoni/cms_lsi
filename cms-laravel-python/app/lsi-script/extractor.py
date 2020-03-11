import os
import PyPDF2
import json

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
if __name__ == '__main__':
    path = ''
    file_name = ''
    doc = extract_pdf_to_list(path, file_name)
    print(json.dumps(doc))
