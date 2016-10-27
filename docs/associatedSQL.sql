create table payment_type(
	id_payment_type int not null auto_increment primary key,
    payment_description varchar(50) not null
)engine=innoDB;

create table frequency(
	id_frequency int not null auto_increment primary key,
    frequency_description varchar(30) not null
)engine=innoDB;

create table bank(
	id_bank int not null auto_increment primary key,
    name_bank varchar(50) not null,
    phone_bank varchar(30) not null,
    min_value decimal(12,2) not null
)engine=innoDB;

create table state(
	id_state int not null auto_increment primary key,
    name_state varchar(75) not null,
    uf varchar(2) not null
)engine=innoDB;

create table city(
	id_city int not null auto_increment primary key,
    name_city varchar(120) not null,
    id_state int not null,
    foreign key (id_state)
		references state(id_state)
			on delete restrict
            on update cascade
)engine=innoDB;

create table associated(
	id_associated bigint not null auto_increment primary key,
    name_assoc varchar(70) not null,
    birth_date date not null,
    rg int not null,
    cpf varchar(18) not null,
    street varchar(72) not null,
    number varchar(5) not null,
    complement varchar(50) not null,
    neighborhood varchar(70) not null,
    name_in_card varchar(50) not null,
    last_update datetime,
    id_bank int not null,
    id_frequency int not null,
    id_payment_type int not null,
    id_city int not null,
    foreign key (id_bank)
		references bank(id_bank)
			on delete restrict
            on update cascade,
    foreign key (id_frequency)
		references frequency(id_frequency)
			on delete restrict
            on update cascade,
    foreign key (id_payment_type)
		references payment_type(id_payment_type)
			on delete restrict
            on update cascade,
    foreign key (id_city)
		references city(id_city)
			on delete restrict
            on update cascade
)engine=innoDB;

create table contact_type(
	id_contact_type int not null auto_increment primary key,
    description_c_type varchar(30) not null
)engine=innoDB;

create table contact(
	id_contact int not null auto_increment primary key,
    id_contact_type int not null,
    id_associated bigint not null,
    description_contact varchar(100) not null,
    foreign key (id_contact_type)
		references contact_type(id_contact_type)
			on delete restrict
            on update cascade,
	foreign key (id_associated)
		references associated(id_associated)
			on delete restrict
            on update cascade
)engine=innoDB;
