const goldMadelVice=["2016000500052",
    "2016100600009",
    "2016000300129",
    "2015220200015",
    "2015010000412",
    "2019010004042",
    "2018020100009",
    "2017010000231",
    "2016100000007",
    "2020120301005",
    "2019210004072",
    "2019120502006",
    "2018000300130",
    "2021110004028",
    "2022020301029",
    "2021010004105",
    "2020220502001",
    "2019110000032",
    "2018100400013",
    "2019020501012",
    "2020210001007",
    "2022020502004",
    "2019210000026",
    "2019100000024",
    "2020020106004",
    "2022210004015",
    "2022220301011"]
const goldMadelChancellor=[ "2016000400060",
    "2017000300005",
    "2018010000105",
    "2018100300034",
    "2019100300074"]

const SCHOOL_DEPARTMENT_PROGRAM_MAP = {
    "School of Science and Engineering": {
        "Bachelor of Science in Computer Science and Engineering": ["BSc in CSE", "BSc in CSE (Weekend)", "BSc in CSE (Diploma Students)", "MCA"],
        "Department of Electronics and Telecommunication Engineering": ["BSc in ETE"],
        "Department of Medical and Radiation Physics": ["MSc in Medical & Radiation Physics"],
        "Bachelor of Pharmacy": ["B. Pharm (Hons)"],
        "Bachelor of Science in Textile Engineering": ["BSc in Textile Engineering", "BSc in Textile Engineering (Diploma)"],
        "Bachelor of Science in Electrical and Electronic Engineering": ["BSc in EEE", "BSc in EEE (Friday)", "BSc in EEE (Diploma Students)"],
        "Bachelor of Architecture": ["Bachelor of Architecture"],
        "Department of Information and Communication Engineering": ["B.Sc. (Honours) in Information and Communication Engineering (ICE)"]
    },
    "Southeast Business School": {
        "Bachelor of Business Administration": ["Bachelor of Business Administration"],
        "Master of Business Administration": ["Master of Business Administration (Regular)"],
        "Master of Business Administration": ["Master of Business Administration"],
        "Executive Master of Business Administration": ["Master of Business Administration (Executive)"],
        "Master of Business Administration": ["Master of Business Administration (1 Year)"],
        "Executive Master of Business Administration": ["Master of Business Administration (Friday)"],
    },
    "School of Arts & Social Sciences": {
        "Bachelor of Laws (Honours)": ["LLB Hons", "LLB Hons (Evening)", "LLB (Pass)", "LLM (Preliminary)"],
        "Master of Laws": ["LLM (Final)"],
        "Bachelor of Arts (Honours) in English": ["BA (Hons) in English"],
        "Master of Arts in English": ["MA in English"],
        "Bachelor of Social Science (Honours) in Economics": ["BSS (Hons) in Economics"],
        "Department of Islamic Studies": ["BA (Hons) in Islamic Studies", "BA (Hons) in Islamic Studies (Campus)", "MA in Islamic Studies", "MA in Islamic Studies (Campus)"],
        "Department of Education": ["Bachelor of Education (B. Ed.)", "Master of Education (M.Ed.)"],
        "Master of Development Studies": ["Master in Development Studies (MDS)"],
        "Bachelor of Arts (Honours) in Bangla": ["Bachelor of Arts (Honours) in Bangla",],
        "Master of Arts in Bangla": ["Master of Arts in Bangla",]
    }
};
const DEGREE_PROGRAM_MAP = {
    "Bachelor of Science in Computer Science and Engineering": ["BSc in CSE", "BSc in CSE (Weekend)", "BSc in CSE (Diploma Students)", "MCA"],
    "Department of Electronics and Telecommunication Engineering": ["BSc in ETE"],
    "Department of Medical and Radiation Physics": ["MSc in Medical & Radiation Physics"],
    "Bachelor of Pharmacy": ["B. Pharm (Hons)"],
    "Bachelor of Science in Textile Engineering": ["BSc in Textile Engineering", "BSc in Textile Engineering (Diploma)"],
    "Bachelor of Science in Electrical and Electronic Engineering": ["BSc in EEE", "BSc in EEE (Friday)", "BSc in EEE (Diploma Students)"],
    "Bachelor of Business Administration": ["Bachelor of Business Administration"],
    "Master of Business Administration": ["Master of Business Administration (Regular)", "Master of Business Administration", "Master of Business Administration (1 Year)"],
    "Executive Master of Business Administration": ["Master of Business Administration (Executive)", "Master of Business Administration (Friday)"],
    "Bachelor of Architecture": ["Bachelor of Architecture"],
    "Department of Information and Communication Engineering": ["B.Sc. (Honours) in Information and Communication Engineering (ICE)"],
    "Bachelor of Laws (Honours)": ["LLB Hons", "LLB Hons (Evening)", "LLB (Pass)", "LLM (Preliminary)"],
    "Master of Laws": ["LLM (Final)"],
    "Bachelor of Arts (Honours) in English": ["BA (Hons) in English"],
    "Master of Arts in English": ["MA in English"],
    "Bachelor of Social Science (Honours) in Economics": ["BSS (Hons) in Economics"],
    "Department of Islamic Studies": ["BA (Hons) in Islamic Studies", "BA (Hons) in Islamic Studies (Campus)", "MA in Islamic Studies", "MA in Islamic Studies (Campus)"],
    "Department of Education": ["Bachelor of Education (B. Ed.)", "Master of Education (M.Ed.)"],
    "Master of Development Studies": ["Master in Development Studies (MDS)"],
    "Bachelor of Arts (Honours) in Bangla": ["Bachelor of Arts (Honours) in Bangla"],
    "Master of Arts in Bangla": ["Master of Arts in Bangla"]
};
function getDegreeByProgram(programName) {
    for (const degree in DEGREE_PROGRAM_MAP) {
        if (DEGREE_PROGRAM_MAP[degree].includes(programName)) {
            return degree;
        }
    }
    return "Degree Not Found";
}
window.onload = () => {
    document.getElementById("preloader").style.display = "none";
    document.getElementById("main-content").classList.remove("hidden");
    document.getElementById("header").classList.remove("hidden");

    createConfetti();
    setInterval(createConfetti, 1000);
};

function getDepartmentByProgram(programName) {
    for (const school in SCHOOL_DEPARTMENT_PROGRAM_MAP) {
        for (const department in SCHOOL_DEPARTMENT_PROGRAM_MAP[school]) {
            if (SCHOOL_DEPARTMENT_PROGRAM_MAP[school][department].includes(programName)) {
                return department;
            }
        }
    }
    //return "Department Not Found";
}

function getStudentCodeFromQuery() {
    const urlParams = new URLSearchParams(window.location.search);
    const studentCode = urlParams.get('code');
    return urlParams.get('code');


}

function getStudentDetails(studentCode) {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: "POST",
            url: "students.php",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify({ code: studentCode }),
            success: function (response) {
                if (response.status === "success") {
                    console.log("Student Found:", response.student);
                    resolve(response.student);  // Return student data
                } else {
                    console.log("Error:", response.message);
                    reject(response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error("Error fetching student data:", error);
                reject(error);
            }
        });
    });
}


function updateStudentCard(studentCode) {
    getStudentDetails(studentCode)
        .then(student => {
            const goldMadelViceStudent = goldMadelVice.includes(studentCode);
            const goldMadelChancellorStudent = goldMadelChancellor.includes(studentCode);

            if (student) {
                document.getElementById('student-name').innerText = student.name;
                document.getElementById('student-picture').src = student.picture;

                if (goldMadelViceStudent) {
                    document.getElementById("goldMadelVice")?.classList?.remove("hidden");
                    document.getElementById("goldMadelChancellor")?.classList?.add("hidden");
                    document.getElementById("goldBadge")?.classList?.remove("hidden");
                    document.getElementById("goldMadelDiv")?.classList?.remove("hidden");
                    document.getElementById("goldMadelLine")?.classList?.remove("hidden");
                    document.getElementById("body")?.classList?.add("gold-effect2");
                    document.getElementById("cardEffectDiv")?.classList?.add("congratulation-bg", "gold-effect");
                }

                if (goldMadelChancellorStudent) {
                    document.getElementById("goldMadelVice")?.classList?.add("hidden");
                    document.getElementById("goldMadelChancellor")?.classList?.remove("hidden");
                    document.getElementById("goldBadge")?.classList?.remove("hidden");
                    document.getElementById("goldMadelDiv")?.classList?.remove("hidden");
                    document.getElementById("goldMadelLine")?.classList?.remove("hidden");
                    document.getElementById("body")?.classList?.add("gold-effect2");
                    document.getElementById("cardEffectDiv")?.classList?.add("congratulation-bg", "gold-effect");
                }

                const department1 = getDegreeByProgram(student.program);
                const department2 = student['another program'] ? getDegreeByProgram(student['another program']) : '';

                document.getElementById('departmentName').innerText = department2 ? `${department1} & ${department2}` : department1;
            } else {
                window.location.href = '/';
            }
        })
        .catch(error => console.error("Error updating student card:", error));
}

function createConfetti() {
    for (let i = 0; i < 100; i++) {
        const confetti = document.createElement("div");
        confetti.classList.add("confetti");
        confetti.style.left = Math.random() * 100 + "vw";
        confetti.style.top = "-10px";
        confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 50%)`;
        confetti.style.animationDuration = Math.random() * 3 + 2 + "s";
        confetti.style.width = Math.random() * 10 + 5 + "px";
        confetti.style.height = confetti.style.width;
        document.body.appendChild(confetti);
        setTimeout(() => confetti.remove(), 5000);
    }
}

setInterval(createConfetti, 1000);

// const studentCode = '2020100410005';
const studentCode = getStudentCodeFromQuery();
if (studentCode) {
    updateStudentCard(studentCode);
}