import os

os.system('echo 'main(t){for(;;t++)putchar(" + os.environ['expr'] + ");}' | cc -x c - -o bytebeat && ./bytebeat" + " | ffmpeg -re -f u8 -ar 8000 -ac 1 -i - -f flv rtmp://a.rtmp.youtube.com/live2/" + os.environ['key'])
