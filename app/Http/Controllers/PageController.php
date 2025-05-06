<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $username = $request->input('username');

        $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:6',
        ]);
        return redirect()->route('dashboard', ['username' => $username]);
    }
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $upcomingConcerts = [
            [
                'id' => 1,
                'name' => 'G-Dragon - Übermensch World Tour',
                'date' => '2025-07-26',
                'location' => 'Indonesia Arena, Jakarta',
                'status' => 'Scheduled'
            ],
            [
                'id' => 2,
                'name' => 'BabyMonsters - Hello Monsters World Tour',
                'date' => '2025-06-14',
                'location' => 'Ice BSD City Hall 5-6',
                'status' => 'Scheduled'
            ],
            [
                'id' => 3,
                'name' => 'NCT Wish - Asia Tour LOG-in',
                'date' => '2025-05-31',
                'location' => 'Jakarta Tennis Indoor Senayan',
                'status' => 'Scheduled'
            ]
        ];
        return view('dashboard', compact('username', 'upcomingConcerts'));
    }
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $concerts = $this->getConcertList();

        $concerts = [
            [
                'id' => 1,
                'name' => 'Blackpink - Born Pink World Tour',
                'date' => '2023-03-11',
                'time' => '18:00',
                'location' => 'Gelora Bung Karno Main Stadium',
                'capacity' => 10000,
                'price' => 'Rp 1.350.000 - Rp 3.800.000',
                'status' => 'Done'
            ],
            [
                'id' => 2,
                'name' => 'BabyMonsters - Hello Monsters World Tour',
                'date' => '2025-06-14',
                'time' => '19:30',
                'location' => 'Ice BSD City Hall 5-6',
                'capacity' => 5000,
                'price' => 'Rp 1.250.000 - Rp 2.550.000',
                'status' => 'Scheduled'
            ],
            [
                'id' => 3,
                'name' => 'NCT Wish - Asia Tour LOG-in',
                'date' => '2025-05-31',
                'time' => '19:00',
                'location' => 'Jakarta Tennis Indoor Senayan',
                'capacity' => 7500,
                'price' => 'Rp 1.350.000 - Rp 2.850.000',
                'status' => 'Scheduled'
            ],
            [
                'id' => 4,
                'name' => 'SMTown Live 2023-SMCU Palace ',
                'date' => '2023-09-23',
                'time' => '18:30',
                'location' => 'Gelora Bung Karno Stadium',
                'capacity' => 6000,
                'price' => 'Rp 1.000.000 - Rp 3.000.000',
                'status' => 'Done'
            ],
            [
                'id' => 5,
                'name' => 'Lee Min Ho - MINHOVERSE Fan Meeting',
                'date' => '2025-04-19',
                'time' => '19:00',
                'location' => 'Ice BSD City Hall 5-6',
                'capacity' => 1000,
                'price' => 'Rp 850.000 - Rp 1.000.000',
                'status' => 'Done'
            ],
            [
                'id' => 6,
                'name' => 'G-Dragon - Übermensch World Tour',
                'date' => '2025-07-26',
                'time' => '18:00',
                'location' => 'Indonesia Arena, Jakarta',
                'capacity' => 9000,
                'price' => 'Rp 1.750.000 - Rp 2.500.000',
                'status' => 'Scheduled'
            ],
            [
                'id' => 7,
                'name' => 'Taeyeon - The TENSE ',
                'date' => '2025-04-12',
                'time' => '19:00',
                'location' => 'Indonesia Arena, Jakarta',
                'capacity' => 5000,
                'price' => 'Rp 1.400.000 - Rp 3.100.000',
                'status' => 'Done'
            ]
        ];
        return view('pengelolaan', compact('username', 'concerts'));
    }
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        $user = [
            'username' => $username,
            'name' => $username,
            'email' => strtolower($username) . '@example.com',
            'role' => 'Admin',
            'joinDate' => '2024-01-15',
            'lastLogin' => date('Y-m-d H:i:s')
        ];
        return view('profile', compact('username', 'user'));
    }
    public function create(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('newconcert', compact('username'));
    }
    public function store(Request $request)
    {
    $username = $request->query('username', 'Guest');

    $data = $request->validate([
        'name' => 'required',
        'date' => 'required|date',
        'time' => 'required',
        'location' => 'required',
        'capacity' => 'required|integer',
        'price1' => 'required',
        'price2' => 'required',
        'status' => 'required',
    ]);

    $newConcert = [
        'id' => rand(8, 15),
        'name' => $data['name'],
        'date' => $data['date'],
        'time' => $data['time'],
        'location' => $data['location'],
        'capacity' => $data['capacity'],
        'price' => 'Rp ' . $data['price1'] . ' - Rp ' . $data['price2'],
        'status' => $data['status']
    ];
    $concerts = $this->getConcertList();
    $concerts[] = $newConcert;

    return view('pengelolaan', compact('username', 'concerts'))
        ->with('success', 'Konser baru berhasil ditambahkan (simulasi)');
    }
    private function getConcertList()
    {
        return [
        [
            'id' => 1,
            'name' => 'Blackpink - Born Pink World Tour',
            'date' => '2023-03-11',
            'time' => '18:00',
            'location' => 'Gelora Bung Karno Main Stadium',
            'capacity' => 10000,
            'price' => 'Rp 1.350.000 - Rp 3.800.000',
            'status' => 'Done'
        ],
        [
            'id' => 1,
            'name' => 'Blackpink - Born Pink World Tour',
            'date' => '2023-03-11',
            'time' => '18:00',
            'location' => 'Gelora Bung Karno Main Stadium',
            'capacity' => 10000,
            'price' => 'Rp 1.350.000 - Rp 3.800.000',
            'status' => 'Done'
        ],
        [
            'id' => 2,
            'name' => 'BabyMonsters - Hello Monsters World Tour',
            'date' => '2025-06-14',
            'time' => '19:30',
            'location' => 'Ice BSD City Hall 5-6',
            'capacity' => 5000,
            'price' => 'Rp 1.250.000 - Rp 2.550.000',
            'status' => 'Scheduled'
        ],
        [
            'id' => 3,
            'name' => 'NCT Wish - Asia Tour LOG-in',
            'date' => '2025-05-31',
            'time' => '19:00',
            'location' => 'Jakarta Tennis Indoor Senayan',
            'capacity' => 7500,
            'price' => 'Rp 1.350.000 - Rp 2.850.000',
            'status' => 'Scheduled'
        ],
        [
            'id' => 4,
            'name' => 'SMTown Live 2023-SMCU Palace ',
            'date' => '2023-09-23',
            'time' => '18:30',
            'location' => 'Gelora Bung Karno Stadium',
            'capacity' => 6000,
            'price' => 'Rp 1.000.000 - Rp 3.000.000',
            'status' => 'Done'
        ],
        [
            'id' => 5,
            'name' => 'Lee Min Ho - MINHOVERSE Fan Meeting',
            'date' => '2025-04-19',
            'time' => '19:00',
            'location' => 'Ice BSD City Hall 5-6',
            'capacity' => 1000,
            'price' => 'Rp 850.000 - Rp 1.000.000',
            'status' => 'Done'
        ],
        [
            'id' => 6,
            'name' => 'G-Dragon - Übermensch World Tour',
            'date' => '2025-07-26',
            'time' => '18:00',
            'location' => 'Indonesia Arena, Jakarta',
            'capacity' => 9000,
            'price' => 'Rp 1.750.000 - Rp 2.500.000',
            'status' => 'Scheduled'
        ],
        [
            'id' => 7,
            'name' => 'Taeyeon - The TENSE ',
            'date' => '2025-04-12',
            'time' => '19:00',
            'location' => 'Indonesia Arena, Jakarta',
            'capacity' => 5000,
            'price' => 'Rp 1.400.000 - Rp 3.100.000',
            'status' => 'Done'
        ]
        ];
    }
}
