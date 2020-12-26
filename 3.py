string = ""
bar = 1

## karena secara default akan punya nilai yang sama
## jadi disini saya membuat 2 segitiga, kiri dan kanan

x = int(input("Cek Pola : "))
print ("\n")
# Looping Baris
while bar <= x:
	kol = bar
	
	# Looping Kolom Spasi Kosong
	while kol > 1:
		string = string + " "  # awal baris 1 akan diberi spasi 1, awal baris 2 akan diberi spasi 2, dst.
		kol = kol - 1
		
	# Looping Kolom Bintang Sisi Kiri	
	kiri = 0  # semua baris akan ditampilkan
	while kiri <= (x - bar):
		string = string + " *"  # sebelum simbol diberi spasi
		kiri = kiri + 1	
		
	# Looping Kolom Bintang Sisi Kanan
	kanan = kiri	
	while kanan > 1:  # 1 baris terakhir simbolnya tidak ditampilkan
		string = string + " *"  # sebelum simbol diberi spasi agar sama seperti bagian kiri
		kanan = kanan - 1

	string = string + "\n\n"  # untuk membuat spasi antar baris
	bar = bar + 1
print (string)