def aSaber(v,n):
    n=0
    i=n-1
    n+=1
    result = 0
    n+=1
    while (i >=0):
        result= result+ v[i]
        i=i-1
        n+=1
    print("El numero de intruciones es: ",n)
    return result
v=[1,2,3,4]
print(aSaber(v,len(v)))