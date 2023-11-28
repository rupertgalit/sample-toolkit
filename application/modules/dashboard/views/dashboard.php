<?php
function randomName()
{
    $firstname = array(
        'Johnathon',
        'Anthony',
        'Erasmo',
        'Raleigh',
        'Nancie',
        'Tama',
        'Camellia',
        'Augustine',
        'Christeen',
        'Luz',
        'Diego',
        'Lyndia',
        'Thomas',
        'Georgianna',
        'Leigha',
        'Alejandro',
        'Marquis',
        'Joan',
        'Stephania',
        'Elroy',
        'Zonia',
        'Buffy',
        'Sharie',
        'Blythe',
        'Gaylene',
        'Elida',
        'Randy',
        'Margarete',
        'Margarett',
        'Dion',
        'Tomi',
        'Arden',
        'Clora',
        'Laine',
        'Becki',
        'Margherita',
        'Bong',
        'Jeanice',
        'Qiana',
        'Lawanda',
        'Rebecka',
        'Maribel',
        'Tami',
        'Yuri',
        'Michele',
        'Rubi',
        'Larisa',
        'Lloyd',
        'Tyisha',
        'Samatha',
    );

    $lastname = array(
        'Mischke',
        'Serna',
        'Pingree',
        'Mcnaught',
        'Pepper',
        'Schildgen',
        'Mongold',
        'Wrona',
        'Geddes',
        'Lanz',
        'Fetzer',
        'Schroeder',
        'Block',
        'Mayoral',
        'Fleishman',
        'Roberie',
        'Latson',
        'Lupo',
        'Motsinger',
        'Drews',
        'Coby',
        'Redner',
        'Culton',
        'Howe',
        'Stoval',
        'Michaud',
        'Mote',
        'Menjivar',
        'Wiers',
        'Paris',
        'Grisby',
        'Noren',
        'Damron',
        'Kazmierczak',
        'Haslett',
        'Guillemette',
        'Buresh',
        'Center',
        'Kucera',
        'Catt',
        'Badon',
        'Grumbles',
        'Antes',
        'Byron',
        'Volkman',
        'Klemp',
        'Pekar',
        'Pecora',
        'Schewe',
        'Ramage',
    );

    $name = $firstname[rand(0, count($firstname) - 1)];
    $name .= ' ';
    $name .= $lastname[rand(0, count($lastname) - 1)];

    return $name;
}
$data = [
    [
        "date" => date("m/d/y", strtotime("now")),
        "name" => randomName(),
        "chapter" => "Manila",
        "type" => "GT",
        "status" => "pending",
    ],
    [
        "date" => date("m/d/y", strtotime("now")),
        "name" => randomName(),
        "chapter" => "Manila",
        "type" => "GT",
        "status" => "pending",
    ],
    [
        "date" => date("m/d/y", strtotime("now")),
        "name" => randomName(),
        "chapter" => "Manila",
        "type" => "GT",
        "status" => "pending",
    ],
    [
        "date" => date("m/d/y", strtotime("now")),
        "name" => randomName(),
        "chapter" => "Manila",
        "type" => "GT",
        "status" => "pending",
    ],
    [
        "date" => date("m/d/y", strtotime("now")),
        "name" => randomName(),
        "chapter" => "Manila",
        "type" => "GT",
        "status" => "pending",
    ]
];

$events = [
    [
        "date" => "Sunday",
        "name" => "New Year's Day",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Monday",
        "name" => "Special non-working day after New Year",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Sunday",
        "name" => "Lunar New Year's Day",
        "type" => "Observance",

    ],
    [
        "date" => "Monday",
        "name" => "First Philippine Republic Day",
        "type" => "Special Working Day",

    ],
    [
        "date" => "Saturday",
        "name" => "Lailatul Isra Wal Mi Raj",
        "type" => "Common local holiday",

    ],
    [
        "date" => "Friday",
        "name" => "Day off for People Power Anniversary",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Saturday",
        "name" => "People Power Anniversary",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Tuesday",
        "name" => "March Equinox",
        "type" => "Season",

    ],
    [
        "date" => "Thursday",
        "name" => "Ramadan Start",
        "type" => "Observance",

    ],
    [
        "date" => "Thursday",
        "name" => "Maundy Thursday",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Friday",
        "name" => "Good Friday",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Saturday",
        "name" => "Black Saturday",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Sunday",
        "name" => "Easter Sunday",
        "type" => "Observance",

    ],
    [
        "date" => "Sunday",
        "name" => "The Day of Valor",
        "type" => "Observance",

    ],
    [
        "date" => "Monday",
        "name" => "The Day of Valor",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Friday",
        "name" => "Eidul-Fitar Holiday",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Saturday",
        "name" => "Eidul-Fitar",
        "type" => "Observance",

    ],
    [
        "date" => "Monday",
        "name" => "Labor Day",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Monday",
        "name" => "Independence Day",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Wednesday",
        "name" => "June Solstice",
        "type" => "Season",

    ],
    [
        "date" => "Wednesday",
        "name" => "Eid al-Adha (Feast of the Sacrifice)",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Thursday",
        "name" => "Eid al-Adha Day 2 (Tentative Date)",
        "type" => "Common local holiday",

    ],
    [
        "date" => "Wednesday",
        "name" => "Amun Jadid",
        "type" => "Muslim, Common local holiday",

    ],
    [
        "date" => "Monday",
        "name" => "Ninoy Aquino Day",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Monday",
        "name" => "National Heroes Day",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Sunday",
        "name" => "Yamashita Surrender Day",
        "type" => "Special Working Day",

    ],
    [
        "date" => "Friday",
        "name" => "Feast of the Nativity of Mary",
        "type" => "Special Working Day",

    ],
    [
        "date" => "Saturday",
        "name" => "September Equinox",
        "type" => "Season",

    ],
    [
        "date" => "Wednesday",
        "name" => "Maulid un-Nabi",
        "type" => "Common local holiday",

    ],
    [
        "date" => "Wednesday",
        "name" => "All Saints' Day",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Thursday",
        "name" => "All Souls' Day",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Monday",
        "name" => "Day off for Bonifacio Day",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Thursday",
        "name" => "Bonifacio Day",
        "type" => "Observance",

    ],
    [
        "date" => "Friday",
        "name" => "Feast of the Immaculate Conception",
        "type" => "Special Non-working Holiday",

    ],
    [
        "date" => "Friday",
        "name" => "December Solstice",
        "type" => "Season",

    ],
    [
        "date" => "Sunday",
        "name" => "Christmas Eve",
        "type" => "Observance",

    ],
    [
        "date" => "Monday",
        "name" => "Christmas Day",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Saturday",
        "name" => "Rizal Day",
        "type" => "Regular Holiday",

    ],
    [
        "date" => "Sunday",
        "name" => "New Year's Eve",
        "type" => "Special Non-working Holiday",

    ],
];
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row statistic-overview ">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>

                        <p>GT Pending Verification</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registered</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Events Verification</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-paper"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="card w-100 p-3 pb-5 ">
            <div class="row d-flex flex-wrap verification-preview">
                <div class="col-6">
                    <div class="card px-2 py-2">
                        <div class="card-title font-weight-normal">
                            <h5 class="font-weight-bold">For Verification (GT)</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover dataTable dtr-inline">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <!-- <th>Chapter</th> -->
                                        <th>Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $row) {
                                        echo "<tr>";
                                        echo "<td class='col-2'>" . $row["date"] . "</td>";
                                        echo "<td class='ellipsis'>" . $row["name"] . "</td>";
                                        // echo "<td>" . $row["chapter"] . "</td>";
                                        echo "<td class='col-2'>" . $row["type"] . "</td>";
                                        echo "<td class='col-2'>" . $row["status"] . "</td>";
                                        echo "</tr>";
                                    }
                                    ;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card px-2 py-2">
                        <div class="card-title font-weight-normal">
                            <h5 class="font-weight-bold">For Verification (Events)</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped dataTable">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <!-- <th>Type</th>
                                    <th>Status</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach (array_slice($events, 0, 5, true) as $key => $row) {
                                        echo "<tr>";
                                        echo "<td class='col-2'>" . $row["date"] . "</td>";
                                        echo "<td class='ellipsis'>" . $row["name"] . "</td>";
                                        echo "<td class='ellipsis'>" . $row["type"] . "</td>";
                                        // echo "<td>" . $row["type"] . "</td>";
                                        // echo "<td>" . $row["status"] . "</td>";
                                        echo "</tr>";
                                    }
                                    ;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card p-2">
                        <div class="card-title">
                            <h5 class="font-weight-bold">Events (<a href="#" data-for="current-month">MMM</a>)</h5>
                        </div>
                        <div class="card-body pt-2 d-flex flex-wrap">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark p-0">
                                    <img class="card-img-top" src="dist/img/photo1.png"
                                        alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor.</p>
                                        <a href="#" class="text-white">Last update 2 mins ago</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark p-0">
                                    <img class="card-img-top" src="dist/img/photo1.png"
                                        alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor.</p>
                                        <a href="#" class="text-white">Last update 2 mins ago</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark p-0">
                                    <img class="card-img-top" src="dist/img/photo1.png"
                                        alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor.</p>
                                        <a href="#" class="text-white">Last update 2 mins ago</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark p-0">
                                    <img class="card-img-top" src="dist/img/photo1.png"
                                        alt="Dist Photo 1">
                                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                                        <h5 class="card-title text-primary text-white">Card Title</h5>
                                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit sed do eiusmod tempor.</p>
                                        <a href="#" class="text-white">Last update 2 mins ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>