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


