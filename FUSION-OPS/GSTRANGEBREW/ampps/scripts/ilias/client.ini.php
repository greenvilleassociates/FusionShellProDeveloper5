; <?php exit; ?>
[server]
start = "./login.php"

[client]
name = "[[client_id]]"
description = ""
access = "1"

[db]
type = "innodb"
host = "[[softdbhost]]"
user = "[[softdbuser]]"
pass = "[[softdbpass]]"
name = "[[softdb]]"
port = "3306"

[auth]
table = "usr_data"
usercol = "login"
passcol = "passwd"

[language]
default = "en"
path = "./lang"

[layout]
skin = "default"
style = "delos"

[session]
expire = "1800"

[system]
ROOT_FOLDER_ID = "1"
SYSTEM_FOLDER_ID = "9"
ROLE_FOLDER_ID = "8"
MAIL_SETTINGS_ID = "12"
MAXLENGTH_OBJ_TITLE = "65"
MAXLENGTH_OBJ_DESC = "123"
DEBUG = "0"

[cache]
activate_global_cache = "0"
global_cache_service_type = "0"
log_level = "0"

[log]
error_recipient = ""

[cache_activated_components]
clng = "0"
obj_def = "0"
ilctrl = "0"
comp = "0"
tpl = "0"
tpl_blocks = "0"
tpl_variables = "0"
events = "0"
global_screen = "0"
