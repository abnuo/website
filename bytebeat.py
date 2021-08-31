import sys
import random
import requests
#import seval
from asteval import Interpreter
from itertools import count

aeval = Interpreter()

def gen(expr, dur):
    try:
        #exp = seval(expr)
        exp = aeval(expr)
        #for t in count(0):
        #   sys.stdout.write(exp)
        for t in dur:
            sys.stdout.write(exp)
    except Exception as e:
        print('Error Virus: ' + str(e))

gen(sys.argv[1], sys.argv[2])
