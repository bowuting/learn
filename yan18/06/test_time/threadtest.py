import datetime
a = 0

start = datetime.datetime.now()

def h():
    global a
    while a<100000000:
        a+=1

h()

end = datetime.datetime.now()

print end-start

print a