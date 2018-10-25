#!/usr/bin/env python
import io
import random
import linecache

count = len(open('themes.py', 'r', encoding='utf-8').readlines())
rand = random.randrange(1,count)
theline = linecache.getline('themes.py', rand)

print('|	|	|	|	|	|	|\n')
print(theline)