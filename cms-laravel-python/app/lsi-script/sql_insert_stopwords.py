from sqlalchemy import create_engine
import os
import sys
def stopwords_id(path, file_name):
    stopwords = []
    f = open(os.path.join(path, file_name), "rb")
    for word in f:
        stopwords.append(word.strip().decode("utf-8"))
    return stopwords

if __name__ == '__main__':
    try:
        engine = create_engine('mysql://root@localhost/db_base?charset=utf8mb4')
        stopwords = stopwords_id('', sys.argv[1])
        for stopword in stopwords:
            query = "INSERT INTO tb_stopword (stopword) VALUES ( '{}' )".format(stopword)
            engine.execute(query)

        print("SUCCESS")
        pass
    except Exception as e:
        print(e)
        raise
