create table cinemas
( cinema_id int unsigned not null auto_increment primary key,
  cinema_name char(50) not null,
  cinema_address varchar(100) not null
);

create table movies
( movie_id int unsigned not null auto_increment primary key,
  title char(50) not null,
  director char(50) not null
  cast char(100) not null
  synopsis varchar(1000)
);

create table showdays
( day_id int unsigned not null auto_increment primary key,
  day char(50) not null,
);

create table showtimes
( show_id int unsigned not null auto_increment primary key,
  cinema_id int unsigned not null,
  day_id int unsigned not null,
  movie_id int unsigned not null
  showtime time(0) not null
);

create table seats
( seat_id int unsigned not null auto_increment primary key,
  seat_row char(50) not null,
  seat_col int unsigned not null
);

create table available
( res_id int unsigned not null auto_increment primary key,
  show_id int unsigned not null,
  seat_id int unsigned not null,
  taken number(1)
);