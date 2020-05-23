import pickle

nombre = "Bartolo"
apellido = "Andropolis"
edad = 20
soltero = False
salario = 8523.50

registro = [nombre, apellido, edad, soltero, salario]

archivo = open('ArchivoX.xCosa', 'wb')

pickle.dump(registro, archivo)

archivo.close()