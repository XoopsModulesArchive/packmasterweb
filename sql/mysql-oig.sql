# --------------------------------------------------------
#
# Schema for PackMasterWeb
#
# --------------------------------------------------------


# Table table_one
CREATE TABLE PackMasterWeb_table_one (
    table_one_key  INT NOT NULL AUTO_INCREMENT,
    table_one_char CHAR(32),
    table_one_text TEXT,


    table_two_key  INT,
# Foreign Keys	
#	FOREIGN KEY (table_two_key) REFERENCES table_two(table_two_key),

# keys
    PRIMARY KEY (table_one_key)
)
    ENGINE = MyISAM;


# Table table_two
CREATE TABLE PackMasterWeb_table_two (
    table_two_key  INT NOT NULL AUTO_INCREMENT,
    table_two_char CHAR(32),
    table_two_text TEXT,


# keys
    PRIMARY KEY (table_two_key)
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



