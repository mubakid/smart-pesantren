let hub_wali = ["Kakek/nenek", "Paman/bibi", "kakak", "lainnya"];
let cita = [
    "PNS",
    "TNI/Polri",
    "Guru/Dosen",
    "Dokter",
    "Politikus",
    "Wiraswasta",
    "Seniman/Artis",
    "Ilmuwan",
    "Agamawan",
];
let kebutuhan_khusus = [
    "Tidak ada",
    "tuna netra",
    "tuna rungu",
    "tuna daksa",
    "tuna grahita",
    "tuna laras",
    "tuna wicara",
    "bakat istimewa",
    "kesulitan belajar",
];
let pendidikan = [
    "tidak memiliki pendidikan formal",
    "sd/mi/sederajat",
    "smp/mts/sederajat",
    "sma/ma/smk/sederajat",
    "d1",
    "d2",
    "d3",
    "d4/s1",
    "s2",
    "s3",
];
let pekerjaan = [
    "tidak bekerja",
    "buruh (tani/pabrik/bangunan)",
    "dokter/bidan/perawat",
    "guru/dosen",
    "nelayan",
    "pedagang",
    "pegawai swasta",
    "pengacara/hakim/jaksa/notaris",
    "pensiunan",
    "petani/peternak",
    "pilot/pramugari",
    "pns",
    "politikus",
    "seniman/pelukis/artis/sejenis",
    "sopir,masinis,kondektur",
    "tni/polisi",
    "wiraswasta",
    "lainnya",
];
let penghasilan = [
    "tidak berpenghasilan",
    "kurang dari 500.000",
    "500.000 - 1 juta",
    "1 juta - 2 juta",
    "2 juta - 3 juta",
    "3 juta - 4 juta",
    "4 juta - 5 juta",
    "lebih dari 5 juta",
];

let status_rumah = [
    "tinggal dengan orang tua/wali",
    "ikut saudara/kerabat",
    "kontrak/kost",
    "rumah singgah",
    "panti asuhan",
    "asrama bukan milik lembaga",
    "lainnya",
];
let kewarganegaraan = [
    { value: "WNI", label: "Warga Negara Indonesia" },
    { value: "WNA", label: "Warga Negara Asing" },
];
let hobi = [
    "olahraga",
    "kesenian",
    "membaca",
    "menulis",
    "jalan-jalan",
    "lainnya",
];

const dataPilihan = {
    cita: cita,
    hobi: hobi,
    hub_wali: hub_wali,
    kebutuhan_khusus: kebutuhan_khusus,
    pendidikan: pendidikan,
    pekerjaan: pekerjaan,
    penghasilan: penghasilan,
    status_rumah: status_rumah,
    kewarganegaraan: kewarganegaraan,
};
export { dataPilihan };
