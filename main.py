import eel
import os

# Set web files folder and optionally specify which file types to check for eel.expose()
#   *Default allowed_extensions are: ['.js', '.html', '.txt', '.htm', '.xhtml']
eel.init('web', allowed_extensions=['.js', '.html'])

@eel.expose                         # Expose this function to Javascript
def say_hello_py(x):
    print('Hello from %s' % x)

eel.start('index.html', mode=None, host='0.0.0.0', port=int(os.environ['PORT']))
