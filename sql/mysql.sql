# --------------------------------------------------------
#
# Schema for PackMasterWeb
#
# --------------------------------------------------------


# Table table_one
CREATE TABLE PackMasterWeb_Scout_Data (
    identifier            INT NOT NULL AUTO_INCREMENT,
    LastName              VARCHAR(19),
    FirstName             VARCHAR(15),
    Suffix                VARCHAR(1),
    Nickname              VARCHAR(15),
    HomeAddressLine1      VARCHAR(29),
    HomeAddressLine2      VARCHAR(29),
    HomeCity              VARCHAR(19),
    HomeState             VARCHAR(2),
    HomeZip               VARCHAR(10),
    HomeCountry           VARCHAR(2),
    MailingAddressLine1   VARCHAR(29),
    MailingAddressLine2   VARCHAR(29),
    MailingCity           VARCHAR(19),
    MailingState          VARCHAR(2),
    MailingZip            VARCHAR(10),
    MailingCountry        VARCHAR(2),
    HomePhone             VARCHAR(20),
    WorkPhone             VARCHAR(20),
    Fax                   VARCHAR(20),
    CellPhone             VARCHAR(20),
    Pager                 VARCHAR(20),
    VoiceMail             VARCHAR(20),
    OtherPhone            VARCHAR(20),
    Email                 VARCHAR(49),
    DateOfBirth           DATE,
    SSN                   VARCHAR(11),
    Grade                 VARCHAR(2),
    School                VARCHAR(29),
    JoinedUnit            DATE,
    BoysLife              VARCHAR(3),
    EligibleWebelos       DATE,
    Tiger                 DATE,
    Cub                   DATE,
    Webelos               DATE,
    BoyScout              DATE,
    Den                   VARCHAR(19),
    EmergencyContact      VARCHAR(29),
    EmergencyPhone        VARCHAR(19),
    HealthForm            VARCHAR(3),
    Doctor                VARCHAR(29),
    DoctorPhone           VARCHAR(19),
    InsuranceCompany      VARCHAR(29),
    Policy                VARCHAR(29),
    Allergies             VARCHAR(69),
    OtherHealthInfo       VARCHAR(149),
    Class1Physical        DATE,
    Class2Physical        DATE,
    Class3Physical        DATE,
    Parent1Relation       VARCHAR(11),
    Parent1LastName       VARCHAR(19),
    Parent1FirstName      VARCHAR(15),
    Parent1Guardian       VARCHAR(3),
    Parent1Sex            VARCHAR(6),
    Parent1HomePhone      VARCHAR(20),
    Parent1WorkPhone      VARCHAR(20),
    Parent1Fax            VARCHAR(20),
    Parent1CellPhone      VARCHAR(20),
    Parent1Pager          VARCHAR(20),
    Parent1VoiceMail      VARCHAR(20),
    Parent1OtherPhone     VARCHAR(20),
    Parent1Email          VARCHAR(49),
    Parent1SSN            VARCHAR(11),
    Parent1DriversLicense VARCHAR(15),
    Parent1LicenseState   VARCHAR(2),
    Parent1Employer       VARCHAR(29),
    Parent1Occupation     VARCHAR(29),
    Parent1WorkCode       VARCHAR(29),


    Parent2Relation       VARCHAR(11),
    Parent2LastName       VARCHAR(19),
    Parent2FirstName      VARCHAR(15),
    Parent2Guardian       VARCHAR(3),
    Parent2Sex            VARCHAR(6),
    Parent2HomePhone      VARCHAR(20),
    Parent2WorkPhone      VARCHAR(20),
    Parent2Fax            VARCHAR(20),
    Parent2CellPhone      VARCHAR(20),
    Parent2Pager          VARCHAR(20),
    Parent2VoiceMail      VARCHAR(20),
    Parent2OtherPhone     VARCHAR(20),
    Parent2Email          VARCHAR(49),
    Parent2SSN            VARCHAR(11),
    Parent2DriversLicense VARCHAR(15),
    Parent2LicenseState   VARCHAR(2),
    Parent2Employer       VARCHAR(29),
    Parent2Occupation     VARCHAR(29),
    Parent2WorkCode       VARCHAR(29),

    Vechile1Year          VARCHAR(2),
    Make1                 VARCHAR(11),
    Model1                VARCHAR(11),
    NumberOfSeatBelts1    VARCHAR(2),
    LicensePlate1         VARCHAR(9),
    InsPerPerson1         VARCHAR(4),
    InsPerAccident1       VARCHAR(4),
    PersonalPropertyIns1  VARCHAR(4),
    Vehicle2Year          VARCHAR(2),
    Make2                 VARCHAR(11),
    Model2                VARCHAR(11),
    NumberOfSeatBelts2    VARCHAR(2),
    LicensePlate2         VARCHAR(9),
    InsPerPerson2         VARCHAR(4),
    InsPerAccident2       VARCHAR(4),
    PersonalPropertyIns2  VARCHAR(4),

    Parent3Relation       VARCHAR(11),
    Parent3LastName       VARCHAR(19),
    Parent3FirstName      VARCHAR(15),
    Parent3Guardian       VARCHAR(3),
    Parent3Sex            VARCHAR(6),
    Parent3Spouse         VARCHAR(20),

# Foreign Keys	
#	FOREIGN KEY (table_two_key) REFERENCES table_two(table_two_key),

# keys
    PRIMARY KEY (identifier)
)
    ENGINE = MyISAM;


# Table table_two
CREATE TABLE PackMasterWeb_Rank_Dates (
    scout_id              INT NOT NULL,
    Tiger_Totem_1         DATE,
    Tiger_Totem_2         DATE,
    Tiger_Totem_3         DATE,
    Tiger_Totem_4         DATE,

    Tiger_Achievement_1   DATE,
    Tiger_Achievement_2   DATE,
    Tiger_Achievement_3   DATE,
    Tiger_Achievement_4   DATE,
    Tiger_Achievement_5   DATE,
    Tiger_Achievement_6   DATE,
    Tiger_Achievement_7   DATE,
    Tiger_Achievement_8   DATE,
    Tiger_Achievement_9   DATE,
    Tiger_Achievement_10  DATE,
    Tiger_Achievement_11  DATE,
    Tiger_Achievement_12  DATE,
    Tiger_Achievement_13  DATE,
    Tiger_Achievement_14  DATE,
    Tiger_Achievement_15  DATE,
    Tiger_Achievement_16  DATE,
    Tiger_Achievement_17  DATE,

    Bobcat_Acheivement_1  DATE,
    Bobcat_Acheivement_2  DATE,
    Bobcat_Acheivement_3  DATE,
    Bobcat_Acheivement_4  DATE,
    Bobcat_Acheivement_5  DATE,
    Bobcat_Acheivement_6  DATE,
    Bobcat_Acheivement_7  DATE,
    Bobcat_Acheivement_8  DATE,
    Bobcat_Acheivement_9  DATE,

    Wolf_Acheivement_1    DATE,
    Wolf_Acheivement_2    DATE,
    Wolf_Acheivement_3    DATE,
    Wolf_Acheivement_4    DATE,
    Wolf_Acheivement_5    DATE,
    Wolf_Acheivement_6    DATE,
    Wolf_Acheivement_7    DATE,
    Wolf_Acheivement_8    DATE,
    Wolf_Acheivement_9    DATE,
    Wolf_Acheivement_10   DATE,
    Wolf_Acheivement_12   DATE,
    Wolf_Acheivement_13   DATE,
    Wolf_Acheivement_14   DATE,

    Bear_Acheivement_1    DATE,
    Bear_Acheivement_2    DATE,
    Bear_Acheivement_3    DATE,
    Bear_Acheivement_4    DATE,
    Bear_Acheivement_5    DATE,
    Bear_Acheivement_6    DATE,
    Bear_Acheivement_7    DATE,
    Bear_Acheivement_8    DATE,
    Bear_Acheivement_9    DATE,
    Bear_Acheivement_10   DATE,
    Bear_Acheivement_11   DATE,
    Bear_Acheivement_12   DATE,
    Bear_Acheivement_13   DATE,
    Bear_Acheivement_14   DATE,
    Bear_Acheivement_15   DATE,
    Bear_Acheivement_16   DATE,
    Bear_Acheivement_17   DATE,
    Bear_Acheivement_18   DATE,
    Bear_Acheivement_19   DATE,
    Bear_Acheivement_20   DATE,
    Bear_Acheivement_21   DATE,
    Bear_Acheivement_22   DATE,
    Bear_Acheivement_23   DATE,
    Bear_Acheivement_24   DATE,
    Bear_Acheivement_25   DATE,

    Webelos_Acheivement_1 DATE,
    Webelos_Acheivement_2 DATE,
    Webelos_Acheivement_3 DATE,
    Webelos_Acheivement_4 DATE,
    Webelos_Acheivement_5 DATE,
    Webelos_Acheivement_6 DATE,
    Webelos_Acheivement_7 DATE,
    Webelos_Acheivement_8 DATE,
    Webelos_Acheivement_9 DATE,

    ArrowOfLight_1        DATE,
    ArrowOfLight_2        DATE,
    ArrowOfLight_3        DATE,
    ArrowOfLight_4        DATE,
    ArrowOfLight_5        DATE,
    ArrowOfLight_6        DATE,
    ArrowOfLight_7        DATE,
    ArrowOfLight_8        DATE,
    ArrowOfLight_9        DATE,
    ArrowOfLight_10       DATE,
    ArrowOfLight_11       DATE,
    ArrowOfLight_12       DATE,


# keys
    PRIMARY KEY (scout_id)
)
    ENGINE = MyISAM;

# Table Academic and Sports
CREATE TABLE PackMasterWeb_AcademicSports (
    scout_id   INT         NOT NULL,
    award_name VARCHAR(20) NOT NULL,
    award_date DATE,

# keys
    PRIMARY KEY (scout_id, award_name)
)
    ENGINE = MyISAM;

# Table Electives
CREATE TABLE PackMasterWeb_Electives (
    scout_id         INT NOT NULL,
    Tiger_Bead_1     DATE,
    Tiger_Bead_2     DATE,
    Tiger_Bead_3     DATE,
    Tiger_Bead_4     DATE,
    Tiger_Bead_5     DATE,
    Tiger_Bead_6     DATE,
    Tiger_Bead_7     DATE,
    Tiger_Bead_8     DATE,
    Tiger_Bead_9     DATE,
    Tiger_Bead_10    DATE,
    Tiger_Bead_11    DATE,
    Tiger_Bead_12    DATE,

    Wolf_Points_1    DATE,
    Wolf_Points_2    DATE,
    Wolf_Points_3    DATE,
    Wolf_Points_4    DATE,
    Wolf_Points_5    DATE,
    Wolf_Points_6    DATE,
    Wolf_Points_7    DATE,
    Wolf_Points_8    DATE,
    Wolf_Points_9    DATE,
    Wolf_Points_10   DATE,
    Wolf_Points_11   DATE,
    Wolf_Points_12   DATE,

    Bear_Points_1    DATE,
    Bear_Points_2    DATE,
    Bear_Points_3    DATE,
    Bear_Points_4    DATE,
    Bear_Points_5    DATE,
    Bear_Points_6    DATE,
    Bear_Points_7    DATE,
    Bear_Points_8    DATE,
    Bear_Points_9    DATE,
    Bear_Points_10   DATE,
    Bear_Points_11   DATE,
    Bear_Points_12   DATE,

    Compass_Points_1 DATE,
    Compass_Points_2 DATE,
    Compass_Points_3 DATE,
    Compass_Points_4 DATE,

# keys
    PRIMARY KEY (scout_id)
)
    ENGINE = MyISAM;

# Table Tiger Electives
CREATE TABLE PackMasterWeb_TigerElectives (
    scout_id    INT NOT NULL,
    elective_1  INT,
    elective_2  INT,
    elective_3  INT,
    elective_4  INT,
    elective_5  INT,
    elective_6  INT,
    elective_7  INT,
    elective_8  INT,
    elective_9  INT,
    elective_10 INT,
    elective_11 INT,
    elective_12 INT,
    elective_13 INT,
    elective_14 INT,
    elective_15 INT,
    elective_16 INT,
    elective_17 INT,
    elective_18 INT,
    elective_19 INT,
    elective_20 INT,
    elective_21 INT,
    elective_22 INT,
    elective_23 INT,
    elective_24 INT,
    elective_25 INT,
    elective_26 INT,
    elective_27 INT,
    elective_28 INT,
    elective_29 INT,
    elective_30 INT,
    elective_31 INT,
    elective_32 INT,
    elective_33 INT,
    elective_34 INT,
    elective_35 INT,
    elective_36 INT,
    elective_37 INT,
    elective_38 INT,
    elective_39 INT,
    elective_40 INT,
    elective_41 INT,
    elective_42 INT,
    elective_43 INT,
    elective_44 INT,
    elective_45 INT,
    elective_46 INT,
    elective_47 INT,
    elective_48 INT,
    elective_49 INT,
    elective_50 INT,

# keys
    PRIMARY KEY (scout_id)
)
    ENGINE = MyISAM;

# Table Wolf Electives
CREATE TABLE PackMasterWeb_WolfElectives (
    scout_id    INT NOT NULL,
    elective_1  INT,
    elective_2  INT,
    elective_3  INT,
    elective_4  INT,
    elective_5  INT,
    elective_6  INT,
    elective_7  INT,
    elective_8  INT,
    elective_9  INT,
    elective_10 INT,
    elective_11 INT,
    elective_12 INT,
    elective_13 INT,
    elective_14 INT,
    elective_15 INT,
    elective_16 INT,
    elective_17 INT,
    elective_18 INT,
    elective_19 INT,
    elective_20 INT,
    elective_21 INT,
    elective_22 INT,
    elective_23 INT,

# keys
    PRIMARY KEY (scout_id)
)
    ENGINE = MyISAM;

# Table Bear Electives
CREATE TABLE PackMasterWeb_BearElectives (
    scout_id    INT NOT NULL,
    elective_1  INT,
    elective_2  INT,
    elective_3  INT,
    elective_4  INT,
    elective_5  INT,
    elective_6  INT,
    elective_7  INT,
    elective_8  INT,
    elective_9  INT,
    elective_10 INT,
    elective_11 INT,
    elective_12 INT,
    elective_13 INT,
    elective_14 INT,
    elective_15 INT,
    elective_16 INT,
    elective_17 INT,
    elective_18 INT,
    elective_19 INT,
    elective_20 INT,
    elective_21 INT,
    elective_22 INT,
    elective_23 INT,
    elective_24 INT,
    elective_25 INT,

# keys
    PRIMARY KEY (scout_id)
)
    ENGINE = MyISAM;

# Table Bear Electives
CREATE TABLE PackMasterWeb_WebelosElectives (
    scout_id      INT NOT NULL,
    Aquanaut      DATE,
    Artist        DATE,
    Athlete       DATE,
    Citizen       DATE,
    Communicator  DATE,
    Craftsman     DATE,
    Engineer      DATE,
    Family_Member DATE,
    Fitness       DATE,
    Forester      DATE,
    Geologist     DATE,
    Handyman      DATE,
    Naturalist    DATE,
    Outdoorsman   DATE,
    Readyman      DATE,
    Scholar       DATE,
    Scientist     DATE,
    Showman       DATE,
    Sportsman     DATE,
    Traveler      DATE,

# keys
    PRIMARY KEY (scout_id)
)
    ENGINE = MyISAM;


# This table holds any configuration settings for the module
CREATE TABLE PackMasterWeb_config (
    config_id          INT NOT NULL,
    # Number of rows displayed on the main screen
    config_main_count  INT,
    # Where clause controlling what is displayed on the main screen
    config_main_where  TEXT,
    # Number of rows displayed in the block
    config_block_count INT,
    # Where clause controlling what is displayed in the database block.
    config_block_where TEXT,

    PRIMARY KEY (config_id)
)
    ENGINE = MyISAM;

# Set defaults, if necessary.
INSERT INTO PackMasterWeb_config (config_id, config_main_count, config_main_where, config_block_count, config_block_where)
VALUES (1, 10, "", 5, "where table_one_key > 0");



