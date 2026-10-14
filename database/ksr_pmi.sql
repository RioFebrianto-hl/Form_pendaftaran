CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(255)
);

INSERT INTO admin(username, password)
VALUES ('admin', MD5('admin123'));

CREATE TABLE pendaftar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(255),
    nim VARCHAR(50),
    angkatan VARCHAR(10),
    program_studi VARCHAR(255),
    jenis_kelamin VARCHAR(20),
    tempat_lahir VARCHAR(100),
    tanggal_lahir DATE,
    alamat TEXT,
    alasan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);