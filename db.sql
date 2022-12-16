create database jurusan;

CREATE TABLE prodi (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(5) NOT NULL,
    nama VARCHAR(50) NOT NULL 
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_prodi INTEGER NOT NULL,
    nim CHAR(10) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_prodi) REFERENCES prodi(id)
);
insert into mahasiswa (id_prodi,nim,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) values (1, '12345678', 'candra','laki-laki', 'banyuwangi', '2000-09-08', 'Jember' );

SELECT * FROM mahasiswa;

UPDATE mahasiswa set nama = 'ilham' where id=1;

DELETE FROM MAHASISWA WHERE id=1;