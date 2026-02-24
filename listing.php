<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project Listings</title>
	<style>
		:root{
			--bg:#fbf7f4;
			--row:#fff;
			--muted:#8b7b73;
			--accent:#0b84ff;
			--border:#efe6e2;
			--pill:#f6f2f0;
			--green:#28a745;
			--orange:#ffbf00;
		}
		html,body{height:100%;}
		body{
			margin:0;
			font-family:Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
			background:var(--bg);
			color:#2b2b2b;
			-webkit-font-smoothing:antialiased;
			-moz-osx-font-smoothing:grayscale;
			padding:36px;
		}
		.card{
			max-width:1100px;
			margin:0 auto;
			background:linear-gradient(180deg, #fff, #fff);
			border-radius:8px;
			box-shadow:0 6px 18px rgba(34,34,34,0.06);
			overflow:hidden;
			border:1px solid var(--border);
		}
		.table-header{
			display:grid;
			grid-template-columns:40px 140px 1fr 140px 60px 80px 120px;
			gap:0;
			align-items:center;
			padding:18px 20px;
			background:transparent;
			font-size:13px;
			color:var(--muted);
			border-bottom:1px solid var(--border);
		}
		.table-body{display:block;}
		.row{
			display:grid;
			grid-template-columns:40px 140px 1fr 140px 60px 80px 120px;
			gap:0;
			align-items:center;
			padding:18px 20px;
			border-bottom:1px solid var(--border);
			background:var(--row);
		}
		.row .date{color:#7a6b62;font-weight:600}
		.project{display:flex;align-items:center;gap:12px}
		.project .checkbox{width:16px;height:16px}
		.project .name{font-weight:700}
		.badge{
			display:inline-block;
			margin-left:8px;
			background:var(--accent);
			color:#fff;
			font-size:12px;
			padding:6px 8px;
			border-radius:999px;
			vertical-align:middle;
		}
		.city{color:#6f6159}
		.state{font-weight:700;color:#6b5a51}
		.units{color:#6f6159}
		.type{color:#6f6159}
		.stage{display:inline-block;padding:6px 10px;border-radius:999px;background:var(--pill);color:#7a6b62;font-weight:600;font-size:12px}
		.stage.planning{background:#fff7f0;color:#845b2b}
		.stage.na{background:#f3f5f6;color:#7a8b94}
		/* small screens */
		@media (max-width:900px){
			.table-header{display:none}
			.row{grid-template-columns:40px 1fr;gap:12px;padding:14px}
			.row > *:nth-child(3), .row > *:nth-child(4), .row > *:nth-child(5), .row > *:nth-child(6), .row > *:nth-child(7){display:block}
			.date{grid-column:1/3}
			.project{grid-column:2/3}
		}
	</style>
</head>
<body>
	<div class="card" role="main">
		<div class="table-header">
			<div></div>
			<div>DATE</div>
			<div>PROJECT NAME</div>
			<div>CITY</div>
			<div>STATE</div>
			<div>UNITS</div>
			<div>TYPE</div>
			<div>STAGE</div>
		</div>

		<div class="table-body">
			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">DoubleTree by Hilton Times Square</div><span class="badge">Active</span></div>
				<div class="city">New York</div>
				<div class="state">NY</div>
				<div class="units">320</div>
				<div class="type">Renovation</div>
				<div class="stage planning">Planning</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">Courtyard Marriott</div><span class="badge">Active</span></div>
				<div class="city">Raleigh/Cary</div>
				<div class="state">NC</div>
				<div class="units">149</div>
				<div class="type">Renovation</div>
				<div class="stage planning">Planning</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">Fairfield Inn</div><span class="badge">Active</span></div>
				<div class="city">Evannsville East</div>
				<div class="state">IN</div>
				<div class="units">116</div>
				<div class="type">Renovation</div>
				<div class="stage planning">Planning</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">Woodspring Suites</div><span class="badge">Active</span></div>
				<div class="city">Clemont</div>
				<div class="state">FL</div>
				<div class="units">120</div>
				<div class="type">Construction</div>
				<div class="stage na">N/A</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">Apollo Residential Hotel</div><span class="badge">Active</span></div>
				<div class="city">Dallas</div>
				<div class="state">TX</div>
				<div class="units">50</div>
				<div class="type">Renovation</div>
				<div class="stage na">N/A</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">Emerald Beach Hotel Indigo</div><span class="badge">Active</span></div>
				<div class="city">Corpus Christi</div>
				<div class="state">TX</div>
				<div class="units">368</div>
				<div class="type">Renovation</div>
				<div class="stage na">N/A</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">Whiteface Lodge</div><span class="badge">Active</span></div>
				<div class="city">Lake Placid</div>
				<div class="state">NY</div>
				<div class="units">94</div>
				<div class="type">Renovation</div>
				<div class="stage planning">Planning</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">Courtyard Marriott</div><span class="badge">Active</span></div>
				<div class="city">Larkspur</div>
				<div class="state">CA</div>
				<div class="units">146</div>
				<div class="type">Renovation</div>
				<div class="stage planning">Planning</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">HOTEL VIN Reserve</div><span class="badge">Active</span></div>
				<div class="city">Grapevine</div>
				<div class="state">TX</div>
				<div class="units">200</div>
				<div class="type">Renovation</div>
				<div class="stage na">N/A</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">TownePlace Suites</div><span class="badge">Active</span></div>
				<div class="city">Overland Park</div>
				<div class="state">KS</div>
				<div class="units">90</div>
				<div class="type">Renovation</div>
				<div class="stage planning">Planning</div>
			</div>

			<div class="row">
				<div><input class="checkbox" type="checkbox"/></div>
				<div class="date">12/19/2025</div>
				<div class="project"><div class="name">TownePlace Suites</div><span class="badge">Active</span></div>
				<div class="city">Las Cruces</div>
				<div class="state">NM</div>
				<div class="units">81</div>
				<div class="type">Renovation</div>
				<div class="stage planning">Planning</div>
			</div>

		</div>
	</div>
</body>
</html>

