def aSaber(v,tamano):
    n=0
    result=0
    n+=1
    i=0
    n+=1
    while i<tamano:
        result=result+ v[i]
        i=i+1
        n+=1
    print("La complejidad es: ",n)
    return result
v=[1,2,3,54]
print(aSaber(v,len(v)))