import pickle

archivo = open('ArchivoX.xCosa', 'rb')

datos = pickle.load(archivo)

print(datos)

archivo.close()