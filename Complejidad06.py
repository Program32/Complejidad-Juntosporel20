def aSaber(v,tamano):
    n=0
    result=0
    n+=1
    i=tamano-1
    n+=1
    while i>=0:
        result=result+ v[i]
        i=i-2
        n+=1
    print("La complejidada es: ",n)
    return result
v=[2,6,9,7,8]
print(aSaber(v,len(v)))