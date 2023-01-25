# import time

# from time import gmtime, strftime

# # 24 hours format
# # print(strftime('%Y/%m/%d %H:%M:%S'))
# # 12-hour format
# # print(strftime('%Y/%m/%d %I:%M:%S'))


# cur = strftime('%H')

# cur = int(cur)


# if cur >= 5 and cur <= 12:
#     print("Good Morning!!!")

# elif cur >= 12 and cur <= 4:
#     print("Good Afternoon!!!")

# elif cur >= 4 and cur <=9:
#     print("Good Evening!!!")

# else:
#     print('Good Night!!!')

    # ------------------------------------------

    # K B C

# import random

# # initializing list
# test_list = ["Fruit of Red color?", "Who makes dishes?", "President of India?"]

# # printing original list
# # print("Original list is : " + test_list)

# # using random.randrange() to
# # get a random number
# rand_idx = random.randrange(len(test_list))
# random_num = test_list[rand_idx]

# # printing random number
# print("Random selected Question is : " + str(random_num))

# def question():


# def fact(n):
#     if(n==0 or n==1):
#         return 1
#     else:
#         return fact(n-1)

# print(fact(3))
# print(fact(4))
# print(fact(5))


import random

# initializing list
test_list = ["Fruit of Red color?", "Who makes dishes?", "President of India?"]

# printing original list
# print("Original list is : " + str(test_list))

# using random.randrange() to
# get a random number
rand_idx = random.randrange(len(test_list))
random_num = test_list[rand_idx]

# printing random number

# print("Random selected Question is : " + str(random_num))






# out = str(random_num)
# print(out)

money = 0

for i in range(len(test_list)):
    out = test_list[i]
    if out == test_list[0]:
        print('Q1) ' + test_list[0])
        first = input("[A] Orange [B] Grapes [C] Watermelon [D] Apple : ---> ")
        if first == 'd' or first == 'D':
            print('--Sahi jawaab--')
            money = money + 1000
        else:
            print('Wrong Answer \n Correct answer is : [D] Apple')

    elif out == test_list[1]:
        print('Q2) ' + test_list[1])
        first = input("[A] Doctor [B] Cheff [C] Disher [D] Engineer : ---> ")
        if first == 'b' or first == 'B':
            print('--Sahi jawaab--')
            money = money + 1000
        else:
            print('Wrong Answer \n Correct answer is : [B] Cheff')




    elif out == test_list[2]:
        print('Q3) ' + test_list[2])
        first = input("[A] Modi Ji [B] Amit [C] Kejriwal [D] Rahul : ---> ")
        if first == 'a' or first == 'A':
            print('--Sahi jawaab--')
            money = money + 1000
        else:
            print('Wrong Answer \n Correct answer is : [A] Modi Ji')


print(money)

