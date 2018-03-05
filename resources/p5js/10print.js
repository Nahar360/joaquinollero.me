let x = 0;
let y = 0;

/*1.0*/
let spacing = 20;

function setup() {
	createCanvas(window.innerWidth, window.innerHeight);
	background('#3C3C3C');
}

function draw() {
	stroke('#7A7A7A');
	if(random(1) < 0.5) {
		line(x, y, x + spacing, y + spacing);
	}
	else {
		line(x, y + spacing, x + spacing, y);
	}
	
	x = x + spacing;
	
	if(x > width) {
		x = 0;
		y = y + spacing;
	}
}

/*2.0*/
/*let spacing = 30;

function setup() {
	createCanvas(1740, 900);
	background(100);
}

function draw() {
	stroke(255);
	if(random(1) < 0.5) {
		line(x, y, x + 10, y + 10);
	}
	else {
		line(x, y + 10, x + 10, y);
	}
	
	x = x + spacing;
	
	if(x > width) {
		x = 0;
		y = y + spacing;
	}
}*/

/*3.0*/
/*let spacing = 30;

function setup() {
	createCanvas(1740, 900);
	background(100);
}

function draw() {
	stroke(255);
	if(random(1) < 0.5) {
		line(x, y, x + spacing, y + spacing);
	}
	else {
		line(x, y + spacing, x + spacing, y);
	}
	
	x = x + spacing;
	
	if(x > width) {
		x = 0;
		y = y + spacing;
	}
}*/

/*4.0*/
/*let spacing = 30;
let degrees = 0;

function setup() {
	createCanvas(1740, 900);
	background(100);
}

function draw() {
	stroke(255);
	
	if(random(1) < 0.5) {
		noFill();
		arc(x, y, 50, 50, 0, PI);
		arc(x, y, 50, 50, PI, 0);
	}
	else {
		noFill();
		//rotate(radians(degrees));
		//arc(x, y, 50, 50, PI+(PI/2), PI/2);
		//arc(x, y+50, 50, 50, PI/2, PI+(PI/2));
		//degrees += 1 % 360;
	}
	
	x = x + spacing;
	
	if(x > width) {
		x = 0;
		y = y + spacing;
	}
}*/