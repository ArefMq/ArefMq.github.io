""" Build index from directory listing

make_index.py </path/to/directory> [--header <header text>]
"""
from __future__ import print_function
import os.path, time
import os

INDEX_TEMPLATE = r"""

<html>
<head>
<title>Aref M Mehr - Download Page</title>
<meta name="description" content="Aref M Mehr - Download Page"/>

</head>
<body>
    <h2>Index of Downloadable Files:</h2>
    <p>
    <table>
        <tbody>
            <tr>
                <th><a href="?C=N;O=D">Name</a></th>
                <th><a href="?C=M;O=A">Last modified</a></th>
                <th><a href="?C=S;O=A">Size</a></th>
                <th><a href="?C=D;O=A">Description</a></th>
            </tr>
            <tr>
                <th colspan="5"><hr></th>
            </tr>
            
            %s
            
            </p>
        </tbody>
    </table>
</body>
</html>
"""

FILE_ROW_TEMPLATE = r"""
    <tr>
        <td><a href="%s">%s</a></td>
        <td align="right">%s</td>
        <td align="right">%s</td>
        <td>%s</td>
    </tr>
"""

EXCLUDED = ['index_generator.py', 'index.html', '.', '..']


def main():
    dir = '.'
    filenames = [fname for fname in sorted(os.listdir(dir)) if fname not in EXCLUDED and os.path.isfile(dir+fname)]
    #dirnames = [fname for fname in sorted(os.listdir(dir)) if fname not in EXCLUDED]
    #dirnames = [fname for fname in dirnames if fname not in filenames]

    f = open(dir + '/index.html', 'w')
    result = ""
    for f in filenames:
        result += FILE_ROW_TEMPLATE % ()


if __name__ == '__main__':
    main()

