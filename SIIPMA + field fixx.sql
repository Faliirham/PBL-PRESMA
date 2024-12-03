
CREATE DATABASE Prestasi_mahasiswa;
GO

use Prestasi_mahasiswa;
GO
-- membuat tabel
CREATE TABLE Prodi (
    id_Prodi INT PRIMARY KEY NOT NULL,
    nama_Prodi VARCHAR(150)
);
GO
CREATE TABLE Kategori_prestasi (
    id_Kategori INT PRIMARY KEY NOT NULL,
    nama_kategori VARCHAR(150)
);
GO
CREATE TABLE Point (
    id_point INT PRIMARY KEY NOT NULL,
    id_Kategori INT FOREIGN KEY REFERENCES Kategori_prestasi(id_Kategori),
    kategori_point VARCHAR(150),
    jml_point INT
);
GO
CREATE TABLE Status_validasi (
    id_status INT PRIMARY KEY NOT NULL,
    status_validasi VARCHAR(50)
);
GO
CREATE TABLE Role (
    id_role INT PRIMARY KEY not null,
    role INT, CONSTRAINT chk_role CHECK (role IN (1, 2))
);
GO
CREATE TABLE Admin (
    id_admin BIGINT PRIMARY KEY,  
    nama_admin VARCHAR(150),
    email_admin VARCHAR(150),
    password VARCHAR(15),
    id_role INT,  
    FOREIGN KEY (id_role) REFERENCES Role(id_role)
);
GO
CREATE TABLE Mahasiswa (
    id_mhs BIGINT PRIMARY KEY not null,
    nama_mhs VARCHAR(150),
    id_prodi INT FOREIGN KEY REFERENCES Prodi(id_Prodi),
    Tahun INT,
    email_mhs VARCHAR(150),
    Password VARCHAR(15),
    id_role INT FOREIGN KEY REFERENCES Role(id_role)
);
GO
CREATE TABLE Prestasi (
    id_prestasi INT PRIMARY KEY not null,
    id_mhs BIGINT FOREIGN KEY REFERENCES Mahasiswa(id_mhs),
    nama_lomba VARCHAR(150),
    id_Kategori INT FOREIGN KEY REFERENCES Kategori_prestasi(id_Kategori),
    Juara VARCHAR(50),
    Tanggal_juara DATE,
    Sertif VARBINARY(MAX),
    foto VARBINARY(MAX),
    surat_tgs VARBINARY(MAX),
    karya VARBINARY(MAX),
    id_point INT FOREIGN KEY REFERENCES Point(id_point)
);
GO
CREATE TABLE Validasi (
    id_validasi INT PRIMARY KEY,
    id_admin BIGINT FOREIGN KEY REFERENCES Admin(id_admin),
    id_prestasi INT FOREIGN KEY REFERENCES Prestasi(id_prestasi),
    tgl_validasi DATE,
    id_status INT FOREIGN KEY REFERENCES Status_validasi(id_status),
    message VARCHAR(255)
);

GO
CREATE TABLE Agenda (
    id_agenda INT PRIMARY KEY,
    nama_agenda VARCHAR(150),
    link VARCHAR(255),
    id_admin BIGINT FOREIGN KEY REFERENCES Admin(id_admin),
	tanggal_agenda DATE
);
GO
CREATE TABLE Notifikasi (
    id_notifikasi INT PRIMARY KEY,
    id_prestasi INT FOREIGN KEY REFERENCES Prestasi(id_prestasi),
    id_validasi INT FOREIGN KEY REFERENCES Validasi(id_validasi)
);
GO
--mengisi tabel
INSERT INTO Prodi (id_Prodi, nama_Prodi) 
VALUES 
(1, 'D-IV TI'),
(2, 'D-IV SIB'),
(3, 'D-II PPLS');
GO
INSERT INTO Kategori_prestasi (id_Kategori, nama_kategori)
VALUES
(1, 'Internasional'),
(2, 'Nasional'),
(3, 'Provinsi'),
(4, 'Kabupaten / Kota'),
(5, 'Kampus');
GO
INSERT INTO Status_validasi (id_status, status_validasi)
VALUES
(1, 'Approve'),
(2, 'Proses'),
(3, 'Ditolak');

GO
INSERT INTO Role (id_role, role)
VALUES (1, 1),  -- Mahasiswa
       (2, 2); -- Admin
GO
INSERT INTO Mahasiswa (id_mhs, nama_mhs, id_prodi, Tahun, email_mhs, Password, id_role)
VALUES 
(2341720048, 'Ananda Rahmawati', 1, 2023, 'ananda.rh@email.com', 'Ananda09',  1),
(2341720049, 'Siti Nurjanah', 2, 2024, 'siti.nurjanah@email.com', 'siti123',  1),
(2341720050, 'Fali Irham', 1, 2023, 'fali.irhamm@email.com', 'faliii2',  1),
(2341720051, 'Dina Fitria', 2, 2024, 'dina.fitria@email.com', 'dinaf22',  1),
(2341720052, 'Alvino valerian', 3, 2022, 'alvinval2@email.com', 'vino123',  1),
(2341720053, 'Rina Wijaya', 1, 2024, 'rina.wijaya@email.com', 'rinwir21',  1),
(2341720054, 'Taufik Hidayat', 3, 2024, 'taufik.hidayat@email.com', 'taufikh7',  1);

GO
INSERT INTO Admin (id_admin, nama_admin, email_admin, password,  id_role)
VALUES (198012031998031001, 'Admin 1', 'admin1@email.com', 'admin123', 2);
GO
INSERT INTO Point (id_point, id_Kategori, kategori_point, jml_point)
VALUES 
-- Kategori Internasional
(1, 1, 'Juara 1 - Tingkat Internasional', 25),
(2, 1, 'Juara 2 - Tingkat Internasional', 24),
(3, 1, 'Juara 3 - Tingkat Internasional', 23),
(4, 1, 'Juara Harapan - Tngkat Internasional', 22),

-- Kategori Nasional
(5, 2, 'Juara 1 - Tingkat Nasional', 20),
(6, 2, 'Juara 2 - Tingkat Nasional', 19),
(7, 2, 'Juara 3 - Tingkat Nasional', 18),
(8, 2, 'Juara Harapan - Tingkat Nasional', 17),

-- Kategori Provinsi
(9, 3, 'Juara 1 - Tingkat Provinsi', 15),
(10, 3, 'Juara 2 - Tingkat Provinsi', 14),
(11, 3, 'Juara 3 - Tingkat Provinsi', 13),
(12, 3, 'Juara Harapan - Tingkat Provinsi', 12),

-- Kategori Kabupaten / Kota
(13, 4, 'Juara 1 - Tingkat Kota / Kabupaten', 10),
(14, 4, 'Juara 2 - Tingkat Kota / Kabupaten', 9),
(15, 4, 'Juara 3 - Tingkat Kota / Kabupaten', 8),
(16, 4, 'Juara Harapan - Tingkat Kota / Kabupaten', 7),

-- Kategori Kampus
(17, 5, 'Juara 1 - Tingkat Kampus', 5),
(18, 5, 'Juara 2 - Tingkat Kampus', 4),
(19, 5, 'Juara 3 - Tingkat Kampus', 3),
(20, 5, 'Juara Harapan - Tingkat Kampus', 2);

INSERT INTO Prestasi (id_prestasi, id_mhs, nama_lomba, id_Kategori, Juara, Tanggal_juara,
Sertif, foto, surat_tgs, karya, id_point)
VALUES
(1, 2341720048, 'Lomba Poster Tingkat Internasional INPOTION', 1, 'Juara 1', '2024-10-15', 
  0x1234567890ABCDEF,  
  0xFEDCBA0987654321,  
  0x1122334455667788,  
  0xAABBCCDDEEFF0011,  
  1),

(2, 2341720049, 'Djuanda International Student Competition', 1, 'Juara 2', '2024-11-01', 
  0x2233445566778899,  
  0x9988776655443322,  
  0x5566778899AABBCC,  
  0xCCDDEEFF00112233,  
  2),

(3, 2341720050, 'National University Debating Championship (NUDC)', 2, 'Juara 3', '2024-09-20', 
  0xA1B2C3D4E5F60708,  
  0x1122334455667788,  
  0x9988776655443322,  
  0x66778899AABBCCDD,  
  7),

(4, 2341720051, 'Kompetisi Mahasiswa Informatika Politeknik Nasional (KMIPN) ', 2, 'Juara 1', '2024-08-30', 
  0x1122334455667788,  
  0x2233445566778899,  
  0x9988776655443322,  
  0xAABBCCDDEEFF0011,  
  5),

(5, 2341720052, 'Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam � Perguruan Tinggi (ONMIPA-PT)', 
3, 'Juara Harapan', '2024-07-25', 
  0xA1B2C3D4E5F60708,  
  0x2233445566778899,  
  0x66778899AABBCCDD,  
  NULL,  
  12),

(6, 2341720052, 'Lomba Olimpiade Matematika', 4, 'Juara 2', '2024-06-15', 
  0x1122334455667788,  
  0x9988776655443322,  
  0x2233445566778899, 
  NULL,  
  14),

(7, 2341720054, 'Futsal Championship Kota Malang', 4, 'Juara 1', '2024-05-10', 
  0x66778899AABBCCDD,  
  0xCCDDEEFF00112233,  
  0x1122334455667788,  
  NULL,  
  13),

(8, 2341720053, 'Liga Basket Mahasiswa Malang (LIBAM)', 4, 'Juara 2', '2024-04-05', 
  0x9988776655443322,  
  0x66778899AABBCCDD,  
  0xAABBCCDDEEFF0011,  
  NULL,  
  14),

(9, 2341720048, 'PLAY IT 2024 - Hackathon Software Development', 5, 'Juara 2', '2024-03-20', 
  0xA1B2C3D4E5F60708,  
  0x9988776655443322, 
  0x2233445566778899,  
  0x66778899AABBCCDD,  
  18),


(10, 2341720049, 'Accounting Skill and English Competition (ASEC)', 5, 'Juara Harapan', '2024-02-28', 
  0x1122334455667788,  
  0xAABBCCDDEEFF0011,  
  0x66778899AABBCCDD,  
  0x2233445566778899,  
  20);
GO

  INSERT INTO Validasi (id_validasi, id_admin, id_prestasi, tgl_validasi, id_status, message)
VALUES
(1, 198012031998031001, 1, '2024-11-01', 1, 'Prestasi disetujui.'),
(2, 198012031998031001, 2, '2024-11-02', 2, 'Prestasi sedang dalam proses validasi.'),
(3, 198012031998031001, 3, '2024-11-03', 3, 'Prestasi ditolak. Dokumen Sertifikat Salah, Harap di perbaiki'),
(4, 198012031998031001, 4, '2024-11-04', 1, 'Prestasi disetujui.'),
(5, 198012031998031001, 5, '2024-11-05', 2, 'Prestasi sedang dalam proses Validasi.'),
(6, 198012031998031001, 6, '2024-11-06', 1, 'Prestasi disetujui.'),
(7, 198012031998031001, 7, '2024-11-07', 3, 'Prestasi ditolak. Dokumen foto kegiatan salah, Harap di perbaiki'),
(8, 198012031998031001, 8, '2024-11-08', 2, 'Prestasi sedang dalam proses.'),
(9, 198012031998031001, 9, '2024-11-09', 1, 'Prestasi disetujui.'),
(10, 198012031998031001, 10, '2024-11-10', 3, 'Prestasi ditolak. Dokumen foto kegiatan salah, Harap di perbaiki ');

GO
INSERT INTO Agenda (id_agenda, nama_agenda, link, id_admin, tanggal_agenda)
VALUES 
(1, 'Workshop Pemrograman', 'https://example.com/workshop-pemrograman', 198012031998031001,'2024-11-01'),
(2, 'Webinar Teknologi Informasi', 'https://example.com/webinar-teknologi', 198012031998031001,'2024-11-05'),
(3, 'Seminar dan Lomba Keamanan Siber', 'https://example.com/seminar-keamanan-siber', 198012031998031001, '2024-10-10'),
(4, 'Hackathon IT', 'https://example.com/hackathon-it', 198012031998031001,'2024-10-15'),
(5, 'Pameran dan Gembyar Lomba Teknologi Terbaru', 'https://example.com/pameran-teknologi', 198012031998031001,'2024-11-20');


GO
CREATE TABLE Rapor_prestasi (
    id_rapor INT PRIMARY KEY,
    id_mahasiswa BIGINT FOREIGN KEY REFERENCES Mahasiswa(id_mhs),
    tgl_cetak DATETIME
);
GO
CREATE TABLE Rapor_prestasi_detail (
    id_rapor INT,
    id_prestasi INT,
    FOREIGN KEY (id_rapor) REFERENCES Rapor_prestasi(id_rapor),
    FOREIGN KEY (id_prestasi) REFERENCES Prestasi(id_prestasi),
    PRIMARY KEY (id_rapor, id_prestasi)
);
GO
INSERT INTO Rapor_prestasi (id_rapor, id_mahasiswa, tgl_cetak)
VALUES (1, 2341720048, '2024-11-15 10:00:00');

GO
INSERT INTO Rapor_prestasi_detail (id_rapor, id_prestasi)
VALUES
(1, 1),  
(1, 9);  
GO
SELECT rp.id_rapor, rp.id_mahasiswa, p.nama_lomba, p.Juara, p.Tanggal_juara
FROM Rapor_prestasi rp
JOIN Rapor_prestasi_detail rpd ON rp.id_rapor = rpd.id_rapor
JOIN Prestasi p ON rpd.id_prestasi = p.id_prestasi
WHERE rp.id_rapor = 1;
GO
INSERT INTO Notifikasi (id_notifikasi, id_prestasi, id_validasi)
VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10);
GO

--Stored Procedure--
CREATE PROCEDURE RankMahasiswaByPoint
AS
BEGIN
    WITH TotalPoints AS (
        SELECT 
            m.id_mhs AS NIM,
            m.nama_mhs AS Nama,
            p.nama_Prodi AS Prodi,
            SUM(pt.jml_point) AS TotalPoint
        FROM 
            Mahasiswa m
        LEFT JOIN Prodi p ON m.id_prodi = p.id_Prodi
        LEFT JOIN Prestasi pr ON m.id_mhs = pr.id_mhs
        LEFT JOIN Point pt ON pr.id_point = pt.id_point
        GROUP BY 
            m.id_mhs, m.nama_mhs, p.nama_Prodi
    )
    SELECT 
        ROW_NUMBER() OVER (ORDER BY TotalPoint DESC) AS Rank,
        Nama,
        Prodi,
        NIM,
        TotalPoint
    FROM 
        TotalPoints
    ORDER BY 
        TotalPoint DESC;
END;
GO

	CREATE PROCEDURE GetLoginData
AS
BEGIN
    SELECT 
        id_mhs AS username,
        password,
        id_role AS role
    FROM mahasiswa

    UNION ALL

    SELECT 
        id_admin AS username,
        password,
        id_role AS role
    FROM admin;
END;