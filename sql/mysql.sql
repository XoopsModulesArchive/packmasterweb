# --------------------------------------------------------
#
# Schema for PackMasterWeb
#
# --------------------------------------------------------


# Table table_one
CREATE TABLE PackMasterWeb_Scout_Data (
	identifier 				int not null auto_increment,
	LastName 				varchar(19),
	FirstName 				varchar(15),
	Suffix					varchar(1),
	Nickname					varchar(15),
	HomeAddressLine1		varchar(29),
	HomeAddressLine2		varchar(29),
	HomeCity					varchar(19),
	HomeState				varchar(2),
	HomeZip					varchar(10),
	HomeCountry			 	varchar(2),
	MailingAddressLine1	varchar(29),
	MailingAddressLine2	varchar(29),
	MailingCity				varchar(19),
	MailingState			varchar(2),
	MailingZip				varchar(10),
	MailingCountry			varchar(2),
	HomePhone				varchar(20),
	WorkPhone				varchar(20),
	Fax						varchar(20),
	CellPhone				varchar(20),
	Pager						varchar(20),
	VoiceMail				varchar(20),
	OtherPhone				varchar(20),
	Email						varchar(49),
	DateOfBirth				date,
	SSN						varchar(11),
	Grade						varchar(2),
	School					varchar(29),
	JoinedUnit				date,
	BoysLife					varchar(3),
	EligibleWebelos		date,
	Tiger						date,
	Cub						date,
	Webelos					date,
	BoyScout					date,
	Den						varchar(19),
	EmergencyContact		varchar(29),
	EmergencyPhone			varchar(19),
	HealthForm				varchar(3),
	Doctor					varchar(29),
	DoctorPhone				varchar(19),
	InsuranceCompany		varchar(29),
	Policy					varchar(29),
	Allergies				varchar(69),
	OtherHealthInfo		varchar(149),
	Class1Physical			date,
	Class2Physical			date,
	Class3Physical			date,
	Parent1Relation		varchar(11),
	Parent1LastName		varchar(19),
	Parent1FirstName		varchar(15),
	Parent1Guardian		varchar(3),
	Parent1Sex				varchar(6),
	Parent1HomePhone		varchar(20),
	Parent1WorkPhone		varchar(20),
	Parent1Fax				varchar(20),
	Parent1CellPhone		varchar(20),
	Parent1Pager			varchar(20),
	Parent1VoiceMail		varchar(20),
	Parent1OtherPhone		varchar(20),
	Parent1Email			varchar(49),
	Parent1SSN				varchar(11),
	Parent1DriversLicense varchar(15),
	Parent1LicenseState	varchar(2),
	Parent1Employer		varchar(29),
	Parent1Occupation		varchar(29),
	Parent1WorkCode		varchar(29),


	Parent2Relation		varchar(11),
	Parent2LastName		varchar(19),
	Parent2FirstName		varchar(15),
	Parent2Guardian		varchar(3),
	Parent2Sex				varchar(6),
	Parent2HomePhone		varchar(20),
	Parent2WorkPhone		varchar(20),
	Parent2Fax				varchar(20),
	Parent2CellPhone		varchar(20),
	Parent2Pager			varchar(20),
	Parent2VoiceMail		varchar(20),
	Parent2OtherPhone		varchar(20),
	Parent2Email			varchar(49),
	Parent2SSN				varchar(11),
	Parent2DriversLicense varchar(15),
	Parent2LicenseState	varchar(2),
	Parent2Employer		varchar(29),
	Parent2Occupation		varchar(29),
	Parent2WorkCode		varchar(29),

	Vechile1Year			varchar(2),
	Make1						varchar(11),
	Model1					varchar(11),
	NumberOfSeatBelts1	varchar(2),
	LicensePlate1			varchar(9),
	InsPerPerson1			varchar(4),
	InsPerAccident1		varchar(4),
	PersonalPropertyIns1	varchar(4),
	Vehicle2Year			varchar(2),
	Make2						varchar(11),
	Model2					varchar(11),
	NumberOfSeatBelts2	varchar(2),
	LicensePlate2			varchar(9),
	InsPerPerson2			varchar(4),
	InsPerAccident2		varchar(4),
	PersonalPropertyIns2	varchar(4),

	Parent3Relation		varchar(11),
	Parent3LastName		varchar(19),
	Parent3FirstName		varchar(15),
	Parent3Guardian		varchar(3),
	Parent3Sex				varchar(6),
	Parent3Spouse   		varchar(20),

# Foreign Keys	
#	FOREIGN KEY (table_two_key) REFERENCES table_two(table_two_key),

# keys
	primary key (identifier)
) TYPE=MyISAM;


# Table table_two
CREATE TABLE PackMasterWeb_Rank_Dates (
	scout_id						int not null,
	Tiger_Totem_1				date,
	Tiger_Totem_2				date,
	Tiger_Totem_3				date,
	Tiger_Totem_4				date,
	
	Tiger_Achievement_1		date,
	Tiger_Achievement_2		date,
	Tiger_Achievement_3		date,
	Tiger_Achievement_4		date,
	Tiger_Achievement_5		date,
	Tiger_Achievement_6		date,
	Tiger_Achievement_7		date,
	Tiger_Achievement_8		date,
	Tiger_Achievement_9		date,
	Tiger_Achievement_10		date,
	Tiger_Achievement_11		date,
	Tiger_Achievement_12		date,
	Tiger_Achievement_13		date,
	Tiger_Achievement_14		date,
	Tiger_Achievement_15		date,
	Tiger_Achievement_16		date,
	Tiger_Achievement_17		date,

	Bobcat_Acheivement_1		date,
	Bobcat_Acheivement_2		date,
	Bobcat_Acheivement_3		date,
	Bobcat_Acheivement_4		date,
	Bobcat_Acheivement_5		date,
	Bobcat_Acheivement_6		date,
	Bobcat_Acheivement_7		date,
	Bobcat_Acheivement_8		date,
	Bobcat_Acheivement_9		date,

	Wolf_Acheivement_1		date,
	Wolf_Acheivement_2		date,
	Wolf_Acheivement_3		date,
	Wolf_Acheivement_4		date,
	Wolf_Acheivement_5		date,
	Wolf_Acheivement_6		date,
	Wolf_Acheivement_7		date,
	Wolf_Acheivement_8		date,
	Wolf_Acheivement_9		date,
	Wolf_Acheivement_10		date,
	Wolf_Acheivement_12		date,
	Wolf_Acheivement_13		date,
	Wolf_Acheivement_14		date,

	Bear_Acheivement_1		date,
	Bear_Acheivement_2		date,
	Bear_Acheivement_3		date,
	Bear_Acheivement_4		date,
	Bear_Acheivement_5		date,
	Bear_Acheivement_6		date,
	Bear_Acheivement_7		date,
	Bear_Acheivement_8		date,
	Bear_Acheivement_9		date,
	Bear_Acheivement_10		date,
	Bear_Acheivement_11		date,
	Bear_Acheivement_12		date,
	Bear_Acheivement_13		date,
	Bear_Acheivement_14		date,
	Bear_Acheivement_15		date,
	Bear_Acheivement_16		date,
	Bear_Acheivement_17		date,
	Bear_Acheivement_18		date,
	Bear_Acheivement_19		date,
	Bear_Acheivement_20		date,
	Bear_Acheivement_21		date,
	Bear_Acheivement_22		date,
	Bear_Acheivement_23		date,
	Bear_Acheivement_24		date,
	Bear_Acheivement_25		date,

	Webelos_Acheivement_1	date,
	Webelos_Acheivement_2	date,
	Webelos_Acheivement_3	date,
	Webelos_Acheivement_4	date,
	Webelos_Acheivement_5	date,
	Webelos_Acheivement_6	date,
	Webelos_Acheivement_7	date,
	Webelos_Acheivement_8	date,
	Webelos_Acheivement_9	date,

	ArrowOfLight_1				date,
	ArrowOfLight_2				date,
	ArrowOfLight_3				date,
	ArrowOfLight_4				date,
	ArrowOfLight_5				date,
	ArrowOfLight_6				date,
	ArrowOfLight_7				date,
	ArrowOfLight_8				date,
	ArrowOfLight_9				date,
	ArrowOfLight_10			date,
	ArrowOfLight_11			date,
	ArrowOfLight_12			date,
	

# keys
	primary key (scout_id)
) TYPE=MyISAM;

# Table Academic and Sports
CREATE TABLE PackMasterWeb_AcademicSports (
	scout_id				int not null,
	award_name				varchar(20) not null,
	award_date				date,

# keys
	primary key(scout_id, award_name)
) TYPE=MyISAM;

# Table Electives
CREATE TABLE PackMasterWeb_Electives (
	scout_id				int not null,
	Tiger_Bead_1			date,
	Tiger_Bead_2			date,
	Tiger_Bead_3			date,
	Tiger_Bead_4			date,
	Tiger_Bead_5			date,
	Tiger_Bead_6			date,
	Tiger_Bead_7			date,
	Tiger_Bead_8			date,
	Tiger_Bead_9			date,
	Tiger_Bead_10			date,
	Tiger_Bead_11			date,
	Tiger_Bead_12			date,
	
	Wolf_Points_1			date,
	Wolf_Points_2			date,
	Wolf_Points_3			date,
	Wolf_Points_4			date,
	Wolf_Points_5			date,
	Wolf_Points_6			date,
	Wolf_Points_7			date,
	Wolf_Points_8			date,
	Wolf_Points_9			date,
	Wolf_Points_10			date,
	Wolf_Points_11			date,
	Wolf_Points_12			date,
	
	Bear_Points_1			date,
	Bear_Points_2			date,
	Bear_Points_3			date,
	Bear_Points_4			date,
	Bear_Points_5			date,
	Bear_Points_6			date,
	Bear_Points_7			date,
	Bear_Points_8			date,
	Bear_Points_9			date,
	Bear_Points_10			date,
	Bear_Points_11			date,
	Bear_Points_12			date,
	
	Compass_Points_1		date,
	Compass_Points_2		date,
	Compass_Points_3		date,
	Compass_Points_4		date,

# keys
	primary key(scout_id)
) TYPE=MyISAM;

# Table Tiger Electives
CREATE TABLE PackMasterWeb_TigerElectives (
	scout_id				int not null,
	elective_1				int,
	elective_2				int,
	elective_3				int,
	elective_4				int,
	elective_5				int,
	elective_6				int,
	elective_7				int,
	elective_8				int,
	elective_9				int,
	elective_10				int,
	elective_11				int,
	elective_12				int,
	elective_13				int,
	elective_14				int,
	elective_15				int,
	elective_16				int,
	elective_17				int,
	elective_18				int,
	elective_19				int,
	elective_20				int,
	elective_21				int,
	elective_22				int,
	elective_23				int,
	elective_24				int,
	elective_25				int,
	elective_26				int,
	elective_27				int,
	elective_28				int,
	elective_29				int,
	elective_30				int,
	elective_31				int,
	elective_32				int,
	elective_33				int,
	elective_34				int,
	elective_35				int,
	elective_36 			int,
	elective_37				int,
	elective_38				int,
	elective_39				int,
	elective_40				int,
	elective_41				int,
	elective_42				int,
	elective_43				int,
	elective_44				int,
	elective_45				int,
	elective_46				int,
	elective_47				int,
	elective_48				int,
	elective_49				int,
	elective_50				int,

# keys
	primary key(scout_id)
) TYPE=MyISAM;

# Table Wolf Electives
CREATE TABLE PackMasterWeb_WolfElectives (
	scout_id				int not null,
	elective_1				int,
	elective_2				int,
	elective_3				int,
	elective_4				int,
	elective_5				int,
	elective_6				int,
	elective_7				int,
	elective_8				int,
	elective_9				int,
	elective_10				int,
	elective_11				int,
	elective_12				int,
	elective_13				int,
	elective_14				int,
	elective_15				int,
	elective_16				int,
	elective_17				int,
	elective_18				int,
	elective_19				int,
	elective_20				int,
	elective_21				int,
	elective_22				int,
	elective_23				int,

# keys
	primary key(scout_id)
) TYPE=MyISAM;

# Table Bear Electives
CREATE TABLE PackMasterWeb_BearElectives (
	scout_id				int not null,
	elective_1				int,
	elective_2				int,
	elective_3				int,
	elective_4				int,
	elective_5				int,
	elective_6				int,
	elective_7				int,
	elective_8				int,
	elective_9				int,
	elective_10				int,
	elective_11				int,
	elective_12				int,
	elective_13				int,
	elective_14				int,
	elective_15				int,
	elective_16				int,
	elective_17				int,
	elective_18				int,
	elective_19				int,
	elective_20				int,
	elective_21				int,
	elective_22				int,
	elective_23				int,
	elective_24				int,
	elective_25				int,

# keys
	primary key(scout_id)
) TYPE=MyISAM;

# Table Bear Electives
CREATE TABLE PackMasterWeb_WebelosElectives (
	scout_id				int not null,
	Aquanaut 				Date,
	Artist 					Date,
	Athlete 				Date,
	Citizen 				Date,
	Communicator 			Date,
	Craftsman 				Date,
	Engineer 				Date,
	Family_Member 			Date,
	Fitness 				Date,
	Forester 				Date,
	Geologist 				Date,
	Handyman 				Date,
	Naturalist 				Date,
	Outdoorsman 			Date,
	Readyman 				Date,
	Scholar 				Date,
	Scientist 				Date,
	Showman 				Date,
	Sportsman 				Date,
	Traveler 				Date,
	
# keys
	primary key(scout_id)
) TYPE=MyISAM;


# This table holds any configuration settings for the module
CREATE TABLE PackMasterWeb_config (
	config_id int not null,
	# Number of rows displayed on the main screen
	config_main_count int,
	# Where clause controlling what is displayed on the main screen
	config_main_where text,
	# Number of rows displayed in the block
	config_block_count int,
	# Where clause controlling what is displayed in the database block.
	config_block_where text,
	
	primary key (config_id)
) TYPE=MyISAM;

# Set defaults, if necessary.
INSERT INTO PackMasterWeb_config (config_id, config_main_count, config_main_where, config_block_count, config_block_where) values (1, 10, "", 5, "where table_one_key > 0");


