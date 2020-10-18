# --------------------------------------------------------
#
# Schema for PackMasterWeb
#
# --------------------------------------------------------


# Table table_one
CREATE TABLE PackMasterWeb_table_one (
	table_one_key int not null auto_increment,
	table_one_char char(32),
	table_one_text text,





	table_two_key int,
# Foreign Keys	
#	FOREIGN KEY (table_two_key) REFERENCES table_two(table_two_key),

# keys
	primary key (table_one_key)
) TYPE=MyISAM;


# Table table_two
CREATE TABLE PackMasterWeb_table_two (
	table_two_key int not null auto_increment,
	table_two_char char(32),
	table_two_text text,





# keys
	primary key (table_two_key)
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


