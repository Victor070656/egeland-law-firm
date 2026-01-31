<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once '../config/database.php';

// Fetch stats
$total_messages_sql = "SELECT COUNT(*) FROM contact_messages";
$result_total = $conn->query($total_messages_sql);
$total_messages = $result_total->fetch_row()[0];

// Fetch recent messages
$sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Patricks Juridisk Senter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'law-blue': '#0f172a',
                        'law-gold': '#c5a059',
                        'law-gold-light': '#e6c88a',
                        'law-gray': '#f8fafc',
                    },
                    fontFamily: {
                        'serif': ['Merriweather', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-law-blue text-white flex-shrink-0 hidden md:block">
            <div class="p-6 border-b border-slate-700">
                <a href="../index.php" class="flex items-center gap-3 group">
                    <div class="w-8 h-8 bg-law-gold text-law-blue flex items-center justify-center font-serif font-bold text-lg rounded-sm">P</div>
                     <span class="text-lg font-serif font-bold tracking-wide group-hover:text-law-gold transition">PATRICKS</span>
                </a>
            </div>
            <nav class="p-4 space-y-2">
                <a href="index.php" class="block px-4 py-3 bg-slate-800 text-law-gold font-medium rounded-sm">Dashboard</a>
                <!-- Future links can go here -->
                <a href="logout.php" class="block px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800 transition rounded-sm mt-8">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Mobile Header -->
            <header class="bg-white shadow-sm border-b border-slate-200 md:hidden p-4 flex justify-between items-center">
                <span class="font-serif font-bold text-law-blue">Admin Panel</span>
                <a href="logout.php" class="text-sm text-red-600">Logout</a>
            </header>
            
             <!-- Desktop Header -->
            <header class="bg-white shadow-sm border-b border-slate-200 hidden md:flex justify-between items-center px-8 py-4">
                <h2 class="text-xl font-serif text-law-blue">Overview</h2>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-slate-500">Welcome, <span class="font-bold text-law-blue"><?php echo htmlspecialchars($_SESSION['username']); ?></span></span>
                </div>
            </header>

            <main class="p-8 overflow-y-auto">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-sm shadow-sm border border-slate-100 flex items-center">
                        <div class="p-4 bg-blue-50 text-law-blue rounded-full mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Total Messages</p>
                            <p class="text-2xl font-bold text-law-blue"><?php echo $total_messages; ?></p>
                        </div>
                    </div>
                    <!-- Placeholders for future stats -->
                    <div class="bg-white p-6 rounded-sm shadow-sm border border-slate-100 flex items-center opacity-50">
                        <div class="p-4 bg-green-50 text-green-600 rounded-full mr-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Resolved</p>
                            <p class="text-2xl font-bold text-law-blue">-</p>
                        </div>
                    </div>
                </div>

                <!-- Messages Table -->
                <div class="bg-white rounded-sm shadow-sm border border-slate-100 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center">
                        <h3 class="font-serif text-lg text-law-blue">Recent Inquiries</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-slate-600">
                            <thead class="bg-slate-50 text-xs uppercase font-bold text-slate-400">
                                <tr>
                                    <th class="px-6 py-4">Date</th>
                                    <th class="px-6 py-4">Name</th>
                                    <th class="px-6 py-4">Contact</th>
                                    <th class="px-6 py-4">Subject</th>
                                    <th class="px-6 py-4 w-1/3">Message</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <?php if ($result && $result->num_rows > 0): ?>
                                    <?php while($row = $result->fetch_assoc()): ?>
                                        <tr class="hover:bg-slate-50 transition">
                                            <td class="px-6 py-4 whitespace-nowrap text-xs text-slate-400">
                                                <?php echo date('M d, Y', strtotime($row['created_at'])); ?><br>
                                                <?php echo date('H:i', strtotime($row['created_at'])); ?>
                                            </td>
                                            <td class="px-6 py-4 font-medium text-law-blue">
                                                <?php echo htmlspecialchars($row['name']); ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-slate-700"><?php echo htmlspecialchars($row['email']); ?></div>
                                                <div class="text-slate-400 text-xs"><?php echo htmlspecialchars($row['phone']); ?></div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="inline-block px-2 py-1 bg-blue-50 text-blue-700 rounded text-xs font-semibold">
                                                    <?php echo htmlspecialchars($row['subject']); ?>
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-slate-500 leading-relaxed">
                                                <div class="line-clamp-2" title="<?php echo htmlspecialchars($row['message']); ?>">
                                                    <?php echo htmlspecialchars($row['message']); ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" class="px-6 py-8 text-center text-slate-400">
                                            No messages found yet.
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>
<?php $conn->close(); ?>