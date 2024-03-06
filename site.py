from flask import Flask
from flask import request
import subprocess

app = Flask(__name__)

@app.route('/php', methods=['POST'])
def handle_php_request():
    php_code = request.form['php_code']
    result = subprocess.run(['php', '-r', php_code], capture_output=True, text=True)
    return result.stdout

if __name__ == '__main__':
    app.run()
