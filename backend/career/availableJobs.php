<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>
    <link rel="stylesheet" href="css/avjobs.css">
</head>

<body>
    <header>
        <h1>Available Jobs</h1>
        <p>Find your next career opportunity</p>
    </header>

    <div class="container">
        <div class="search-section">
            <input type="text" id="searchInput" placeholder="Search job titles or companies...">
            <select id="locationFilter">
                <option value="">All Locations</option>
                <option value="New York">New York</option>
                <option value="London">London</option>
                <option value="Tokyo">Tokyo</option>
                <option value="Remote">Remote</option>
            </select>
            <button class="clear-filters" onclick="clearFilters()">Clear Filters</button>
        </div>

        <div class="jobs-container" id="jobsContainer">
            <!-- Job listings will be here -->
            <div class="job-card">
                <a href="jobdes.php?id=1" class="job-title">Senior Frontend Developer</a>
                <p class="company">Tech Corp Inc.</p>
                <p class="location">New York</p>
                <p class="salary">$120,000 - $150,000</p>
                <div class="tags">
                    <span class="tag">Full-time</span>
                    <span class="tag">React</span>
                    <span class="tag">Senior</span>
                </div>
                <button class="apply-btn">Apply Now</button>
            </div>

            <!-- Add more job cards here -->
            <!-- You can duplicate the job-card div and modify the content -->
        </div>
    </div>

    <script>
    // Sample job data (you can add more)
    const jobs = [{
            title: "Web Developer",
            company: "Digital Solutions",
            location: "Remote",
            salary: "$80,000 - $100,000",
            tags: ["Remote", "JavaScript", "Mid-level"]
        },
        {
            title: "UX Designer",
            company: "Creative Studio",
            location: "London",
            salary: "£50,000 - £65,000",
            tags: ["Design", "Full-time", "Senior"]
        }
        // Add more job objects here
    ];

    // Filter jobs based on search input and location
    function filterJobs() {
        const searchInput = document.getElementById('searchInput').value.toLowerCase();
        const locationFilter = document.getElementById('locationFilter').value;
        const jobCards = document.querySelectorAll('.job-card');

        jobCards.forEach(card => {
            const title = card.querySelector('.job-title').textContent.toLowerCase();
            const company = card.querySelector('.company').textContent.toLowerCase();
            const location = card.querySelector('.location').textContent;

            const matchesSearch = title.includes(searchInput) || company.includes(searchInput);
            const matchesLocation = locationFilter === '' || location === locationFilter;

            card.style.display = matchesSearch && matchesLocation ? 'block' : 'none';
        });
    }

    // Clear all filters
    function clearFilters() {
        document.getElementById('searchInput').value = '';
        document.getElementById('locationFilter').value = '';
        filterJobs();
    }

    // Event listeners
    document.getElementById('searchInput').addEventListener('input', filterJobs);
    document.getElementById('locationFilter').addEventListener('change', filterJobs);

    // Add click event to all apply buttons
    document.querySelectorAll('.apply-btn').forEach(button => {
        button.addEventListener('click', function() {
            const jobTitle = this.parentElement.querySelector('.job-title').textContent;
            alert(`Applying for: ${jobTitle}`);
            // You can add your actual application logic here
        });
    });
    </script>
</body>

</html>