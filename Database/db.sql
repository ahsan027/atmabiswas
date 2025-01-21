show tables;


CREATE TABLE branch(
    branchId int(255) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    branchName VARCHAR(255) NOT NULL,
    branchLoc VARCHAR(255) NOT NULL,
    division VARCHAR(255) NOT NULL,
    dist VARCHAR(255) NOT NULL
);

CREATE TABLE admins(
    adminId INT(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(255) NOT NULL,
    pswd VARCHAR(255) NOT NULL
);


describe branch;


INSERT INTO branch (branchName, branchLoc, division, dist) VALUES
('Maheshpur Branch', 'Maheshpur', 'Khulna', 'Jhenaidah'),
('Asmankhali Branch', 'Alamdanga', 'Khulna', 'Chuadanga'),
('Jibannagar Branch', 'Jiban Nagar', 'Khulna', 'Chuadanga'),
('ARPARA BRANCH', 'Shalikha', 'Khulna', 'Magura'),
('Sorojganj Branch', 'Chuadanga Sadar', 'Khulna', 'Chuadanga'),
('Navaran Branch', 'Sharsha', 'Khulna', 'Jessore'),
('JHIKARGACHA BRANCH', 'Jhikargachha', 'Khulna', 'Jessore'),
('Jhaudia Branch', 'Kushtia Sadar', 'Khulna', 'Kushtia'),
('Kalukhali Branch', 'Kalukhali', 'Khulna', 'Rajbari'),
('Kaliganj Branch', 'Kaliganj', 'Khulna', 'Jhenaidah'),
('Meherpur Branch', 'Meherpur Sadar', 'Khulna', 'Meherpur'),
('Poradaha Branch', 'Mirpur', 'Khulna', 'Kushtia'),
('Alamdanga Branch', 'Alamdanga', 'Khulna', 'Chuadanga'),
('Darsana Branch', 'Damurhuda', 'Khulna', 'Chuadanga'),
('Sadar Branch-1', 'Chuadanga Sadar', 'Khulna', 'Chuadanga'),
('Churamonkati Branch', 'Jessore Sadar', 'Khulna', 'Jessore'),
('Hatboalia Branch', 'Alamdanga', 'Khulna', 'Chuadanga'),
('Andulbaria Branch', 'Jiban Nagar', 'Khulna', 'Chuadanga'),
('Vairoba Branch', 'Maheshpur', 'Khulna', 'Jhenaidah'),
('Dingedah Branch', 'Chuadanga Sadar', 'Khulna', 'Chuadanga'),
('Harinakundu Branch', 'Harinakunda', 'Khulna', 'Jhenaidah'),
('Bamundi Branch', 'Gangni', 'Khulna', 'Meherpur'),
('PANGSHA Branch', 'Pangsha', 'Khulna', 'Rajbari'),
('CHHUTIPUR BRANCH', 'Jhikargachha', 'Khulna', 'Jessore'),
('Patikabari Branch', 'Kushtia Sadar', 'Khulna', 'Kushtia'),
('Alokdia Branch', 'Chuadanga Sadar', 'Khulna', 'Chuadanga'),
('Kotchandpur Branch', 'Kotchandpur', 'Khulna', 'Jhenaidah'),
('Karpashdanga Branch', 'Damurhuda', 'Khulna', 'Chuadanga'),
('Amla Branch', 'Mirpur', 'Khulna', 'Kushtia'),
('Khashkarra Branch', 'Alamdanga', 'Khulna', 'Chuadanga'),
('CHANCHRA', 'Jessore Sadar', 'Khulna', 'Jessore'),
('ATMA BISWAS ME', 'Chuadanga Sadar', 'Khulna', 'Chuadanga'),
('ISHARDI Branch', 'Ishwardi', 'Rajshahi', 'Pabna');


UPDATE branch
SET branchLoc = CASE 
    WHEN branchId = 1 THEN 'Hamidpur Para, Maheshpur, Jhenaidah'
    WHEN branchId = 2 THEN 'C/O-Md. Ibrahim Munshi, Asmankhali Bazar, Alamdanga, Chuadanga'
    WHEN branchId = 3 THEN 'C/O-Md. Kutubuddin Sarker, High School Para, Jibannagar, Chuadanga'
    WHEN branchId = 4 THEN 'Arpara Shalikha, Magura'
    WHEN branchId = 5 THEN 'C/O-Mst. Badrunnaher, Sorojganj Bazar, Chuadanga'
    WHEN branchId = 6 THEN 'Uttar Buruzbagan Forest Para, Navaran Bazar, Sharsha, Jessore'
    WHEN branchId = 7 THEN 'Village: Raghurathagar, Khalasi Para, Post Office: Raghurathagar, Pouroshova/Upazila: Jhikargacha, District: Jessore'
    WHEN branchId = 8 THEN 'C/O-Mr. Shawpan Chowdhury, Shahi Masjid Para, Jhaudia, Kushtia'
    WHEN branchId = 9 THEN 'Rotondia Kaliukhali, Rajbari'
    WHEN branchId = 10 THEN 'C/O-Md. Abdul Hamid (Rtd. ATO), Bihari Moar, Arpara, Kaliganj, Jhenaidah'
    WHEN branchId = 11 THEN 'C/O-Md. Shad Ahmed (Beside of Kobi Nazrul Islam High School), Mollick Para, Meherpur'
    WHEN branchId = 12 THEN 'C/O-Md. Mosaduzzaman, Harun Moar, Poradaha Bazar, Mirpur, Kushtia'
    WHEN branchId = 13 THEN 'C/O-Md. Sonjer Ali, Alamdanga Station Road, Alamdanga, Chuadanga'
    WHEN branchId = 14 THEN 'C/O-Mst. Selina Begum, Darshana Bus Stand Para, Damurhuda, Chuadanga'
    WHEN branchId = 15 THEN 'Behind of Head Office, Cinema Hall Para, Chuadanga'
    WHEN branchId = 16 THEN 'Ghona Road, Churamonkati Bazar, Churamonkati, Jessore'
    WHEN branchId = 17 THEN 'C/O-Md. Kauser Ahmad Bablu (Present UP Chairman), Mill Para, Hatboalia, Alamdanga, Chuadanga'
    WHEN branchId = 18 THEN 'C/O-Md. Mofizur Rahaman, Andulbaria Mistri Para, Jiban Nagar, Chuadanga'
    WHEN branchId = 19 THEN 'C/O-Md. Ruhul Amin, Vairoba Dotola Jame Masjid, Vairoba Bazar, Maheshpur, Jhenaidah'
    WHEN branchId = 20 THEN 'Previous UP Parishad, Dingedah Bazar, Chuadanga'
    WHEN branchId = 21 THEN 'Village: Chithlia College Para, Union: Harinakundu, Upazila: Harinakundu, District: Jhenaidah'
    WHEN branchId = 22 THEN 'C/O-Md. Abdur Rahim, Bamundi Bazar, Gangni, Meherpur'
    WHEN branchId = 23 THEN 'Pangsha Sub Registri Officer Pisone, Pangsha, Rajbari'
    WHEN branchId = 24 THEN 'Md: Abu Talha Shilu, Village: Mohammadpur, Post Office: Ganganandapur, Union: Ganganandapur, Upazila: Jhikargacha, District: Jessore'
    WHEN branchId = 25 THEN 'C/O-Md. Mostafizur Rahaman, Patikabari Bazar Road, Kushtia'
    WHEN branchId = 26 THEN 'Alokdia Bazar (Beside of Old Union Parashad), Chuadanga'
    WHEN branchId = 27 THEN 'C/O-Md. Nurul Islam, Aakh Center Moar, Gabtala Para, Kotchandpur, Jhenaidah'
    WHEN branchId = 28 THEN 'C/O-Dr. Asabul Haque, Karpashdanga Bazar, Damurhuda, Chuadanga'
    WHEN branchId = 29 THEN 'Md. Abdur Razzak (Beside of Old Aakh Center), Amla Sadarpur, Amla, Mirpur, Kushtia'
    WHEN branchId = 30 THEN 'Khashkarra Bazar, Alamdanga, Chuadanga'
    WHEN branchId = 31 THEN 'Jessore Sadar, Chanchra'
    WHEN branchId = 32 THEN 'C/O-Husnara Ferdos (Behind of Head Office), Cinema Hall Para, Chuadanga'
    WHEN branchId = 33 THEN 'Piarpur Upazila Road, Piarpur, Ishardi, Pabna'
    ELSE branchLoc -- Keep original value if no match
END;



SELECT DISTINCT dist FROM branch WHERE division = "khulna"; 