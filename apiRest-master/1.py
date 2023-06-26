sheet_names=['Accessories',
'Accion',
'Bedrooms',
'BodyParts1',
'Clothes1',
'Clothes2',
'Colours',
'DailyRoutine',
'Drinks',
'EverydayObje',
'FarmAnimals',
'FoodInBritain1',
'FoodInBrain2',
'Fruit1',
'Holidays',
'Homes',
'Hotels']
lista=[]
#sheet_names = excel_file.sheet_names
for sheet_name in sheet_names:
  m1="CREATE TABLE "
  m2=""" (
        id INT AUTO_INCREMENT,
        ing VARCHAR(50),
        esp VARCHAR(255),
        link VARCHAR(1000),
        frase VARCHAR(1000),
        traducida VARCHAR(1000),
        PRIMARY KEY (id)
    );"""
  s=sheet_name
  lista.append(s.lower())
  print(m1+sheet_name+m2+'\n')

print(lista)
#parte 1, lista=['accessories', 'accion', 'bedrooms', 'bodyparts1', 'clothes1', 'clothes2', 'colours', 'dailyroutine', 'drinks', 'everydayobje', 'farmanimals', 'foodinbritain1', 'foodinbrain2', 'fruit1', 'holidays', 'homes', 'hotels']
#parte 2, lista=['jobs1', 'jobs2', 'kitchens1', 'livingroms', 'mealsandcook', 'money', 'moving', 'nature1', 'placesinatown', 'restaurants1', 'school', 'shopping', 'snacksanddesserts', 'transport1', 'transport2', 'weather']
