import xlsxwriter
import time
import sys
import os
import json
import random

'''
{
 fileName:'',
 data:{
   'sheet1':[
        [{value:'', format:{}}, {value:'', format:{}}],
        [{value:'', format:{}}, {value:'', format:{}}]
    ],
    'sheet2':[
        [{value:'', format:{}}, {value:'', format:{}}],
        [{value:'', format:{}}, {value:'', format:{}}]
    ],
 }
}
'''

jsonFile = sys.argv[1].replace('\\', '/')
if not os.path.isfile(jsonFile):
	print(jsonFile+' not exist')
	sys.exit();	


file = open(jsonFile)
string = file.read()
json = json.loads(string)
file.close()
#print('json obj=', string)

#sys.exit()

startTime = time.time()
#print('Start from: ', startTime)
fileArr = jsonFile.split('/')
savePath = '/'.join(fileArr[0:len(fileArr)-1]);
jsonFile = savePath+'/'+str(random.randint(1000,9999))+'_'+str(startTime)+'.xlsx';
workbook = xlsxwriter.Workbook(jsonFile, {'constant_memory': True})

# Add a bold format to use to highlight cells.
#bold = workbook.add_format({'bold': True})

# Add a number format for cells with money.
#money = workbook.add_format({'num_format': '$#,##0'})

# align
#center = workbook.add_format()
#center.set_align('center')

#print('data = ', repr(json))
#sys.exit()

for sheet in list(json['data'].keys()):
	worksheet = workbook.add_worksheet() if sheet=='' else workbook.add_worksheet(sheet)
	rowNum = 1			
	#print('sheet =>', sheet)
	if 'col_format' in json['data'][sheet]:
		for item in json['data'][sheet]['col_format']:			
			if 'width' in item:
				if 'format' in item:
					worksheet.set_column(item['col'], item['width'], item['format'])
				else:	
					worksheet.set_column(item['col'], item['width'])
					
	if 'rows' in json['data'][sheet]:
		rows = json['data'][sheet]['rows']
	else:
		rows = json['data'][sheet]
		
	for row in rows:
		firstCol = 'A'
		for col in row:
			#//print('col =', repr(col))
			if 'format' in col:
				format = workbook.add_format(col['format'])
				worksheet.write(firstCol+''+str(rowNum), col['value'], format)
			elif 'merge' in col:
				worksheet.merge_range(col['merge']['range'], col['merge']['value'], col['merge']['format'] if 'format' in col['merge'] else {})
			else:
				worksheet.write(firstCol+''+str(rowNum), col['value'])
			firstCol = chr(ord(firstCol)+1)	
		rowNum = rowNum+1
    	

workbook.close()
print(jsonFile)
#sys.exit()
#file = open(jsonFile, 'rb')
#content = file.read()
#print(content)
file.close()

#endTime = time.time()
#print('end at: ', endTime)
#print('took : ', endTime-startTime)