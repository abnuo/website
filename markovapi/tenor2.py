import tenor
import sys
print('|'.join(tenor.searchTenor(sys.argv[1], int(sys.argv[2]))))
