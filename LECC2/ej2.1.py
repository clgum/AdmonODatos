f = open("poem.txt","r")

print("1:",f.read(2)) #lee los primeros 3 carácteres
print("2:",f.read()) #lee los carácteres restantes en el archivo
print("3:",f.read()) #Se alcanza el final del archivo (EOF)
f.close()