#Function: hitungGaji(param1, param2, param3, param4)
#Param1 = Nama Karyawan
#Param2 = Jumlah besar gaji
#Param3 = Banyak bulan
#Param4 = Boolean apakah ada tunjuangan atau tidak

#Kondisi: 
#Tunjangan = 500.000
#BPJS = 3%
#Pajak = 5%

#Input: hitungGaji(“Andi”, 1500000, 2, true)

#Output: 
#===============================
#Nama Karyawan: Andi
#Gaji Pokok: 1.500.000
#Tunjangan: 500.000
#BPJS: 45.000
#Pajak: 75.000
#===============================
#Gaji bersih: 1.880.000 / bulan
#===============================
#Total Gaji: 3.760.000
#========================== MARI EKSEKUSI =================================#
param1 = input("Nama Karyawan : ")
param2 = int(input("Jumlah besar gaji : "))
param3 = int(input("Banyak bulan : "))
param4 = input("Apakah ada tunjuangan atau tidak : ")
#===================================================================================================#
def hitungGaji(param1, param2, param3, param4):
#===================================================================================================#
    print("Nama Karyawan : " + param1)
#===================================================================================================#
    print("Gaji Pokok : " + str(param2))
#===================================================================================================#
    if param4 == "true" or param4 == "benar" or param4 == "ada" :
   	   print("Tunjangan : ", 500000)
#===================================================================================================#
    BPJS = int(param2 * 3/100)
    pajak = int(param2 * 5/100)
    print("BPJS : ", BPJS)
    print("pajak : ", pajak)
#===================================================================================================#
    print("===========================")
#===================================================================================================#
    gajiBersih = int(param2 + 500000 - BPJS - pajak)
    print("Gaji Bersih : ", gajiBersih ," / bulan")
#===================================================================================================#
    print("===========================")
#===================================================================================================#
    print("Total Gaji : ", param3 * gajiBersih)
#===================================================================================================#
print("================================")
print("================================")
hitungGaji(param1, param2, param3, param4)


### hasil yang ditampilkan belum bisa berupa currency IDR ###
	
	