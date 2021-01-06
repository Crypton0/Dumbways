#========================== MARI EKSEKUSI =================================#
print("\n ==============================================")
print("|            Menghitung besar gaji             |")
print("| dengan tunjangan Rp.500.000 BPJS=3% Pajak=5% |")
print(" ==============================================\n")
param1 = input("Nama Karyawan : ")
param2 = int(input("Jumlah besar gaji : "))
param3 = int(input("Banyak bulan : "))
param4 = input("Apakah ada tunjuangan atau tidak : ")
#===================================================================================================#
def hitungGaji(param1, param2, param3, param4):
#===================================================================================================#
    print("Nama Karyawan :",param1)
#===================================================================================================#
    print("Gaji Pokok :", param2)
#===================================================================================================#
    if param4 == "true" or param4 == "benar" or param4 == "ada" :
   	   print("Tunjangan :", 500000)
#===================================================================================================#
    BPJS = int(param2 * 3/100)
    pajak = int(param2 * 5/100)
    print("BPJS :", BPJS)
    print("pajak :", pajak)
#===================================================================================================#
    print("================================")
#===================================================================================================#
    gajiBersih = int(param2 - BPJS - pajak)

    if param4 == "true" or param4 == "benar" or param4 == "ada" :
       print("Gaji Bersih :", gajiBersih + 500000 ," / bulan")
    else:
       print("Gaji Bersih :", gajiBersih ," / bulan")
#===================================================================================================#
    print("================================")
#===================================================================================================#
    if param4 == "true" or param4 == "benar" or param4 == "ada" :
       print("Total Gaji :", param3 * gajiBersih + 500000)
    else:
       print("Total Gaji :", param3 * gajiBersih)
#===================================================================================================#
print("\n================================")
print("================================")
hitungGaji(param1, param2, param3, param4)


### hasil yang ditampilkan belum bisa berupa currency IDR ###
	
	
