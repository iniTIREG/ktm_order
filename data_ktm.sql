CREATE DATABASE data_ktm;
USE data_ktm;
CREATE TABLE form_order(
nomor INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
NRP INT(10),
email VARCHAR(100),
nomor_wa INT(15),
status_ktm ENUM('hilang','rusak'),
bukti_lapor VARCHAR(255),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

