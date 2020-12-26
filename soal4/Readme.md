# Dumbways

1. users_tb
- id
- name
- photo
- email
- password

2. post_tb
- id
- content
- image
- id_user(FK)

Penamaan untuk kolom database "id_user(FK)" pada tabel "post_tb" membingungkan, seharusnya diganti "id_content" agar lebih memudahkan dalam penulisan.
Atau kolom database "id" pada tabel "users_tb" diganti menjadi "id_user(FK)".


