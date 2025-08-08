<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-white">
                {{ __('Revolutionary Dashboard') }}
        </h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-300">Welcome, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" 
                            class="bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-gray-800">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-800 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.02"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        
        <!-- Bangla quote - moved higher -->
        <div class="absolute top-8 left-10 right-10 text-center z-10">
            <div class="bg-red-900/20 backdrop-blur-sm border border-red-800/30 rounded-lg p-6 max-w-4xl mx-auto">
                <blockquote class="text-red-200 italic text-xl leading-relaxed font-medium">
                    "স্বর্গের ছাদে খেলা করে রিয়া গোপ, ওইযে নাফিস রিকশা পালকি চড়ে"
                </blockquote>
                <cite class="block mt-3 text-red-300 font-semibold">— Revolutionary Poetry</cite>
            </div>
        </div>

        <!-- Main dashboard content -->
        <div class="relative z-20 pt-28 pb-12 px-6">
            <div class="max-w-7xl mx-auto">


                <!-- Six Main Sections -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Martyrs -->
                    <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-2xl p-6 shadow-2xl hover:shadow-red-500/10 transition-all duration-300 group">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-800 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Martyrs</h3>
                            <p class="text-gray-400 mb-4">Honor the fallen heroes</p>
                            <button class="inline-block bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                View Martyrs
                            </button>
                        </div>
                    </div>

                    <!-- Events -->
                    <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-2xl p-6 shadow-2xl hover:shadow-red-500/10 transition-all duration-300 group">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-800 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Events</h3>
                            <p class="text-gray-400 mb-4">Revolutionary gatherings</p>
                            <button class="inline-block bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                View Events
                            </button>
                        </div>
                    </div>

                    <!-- Books -->
                    <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-2xl p-6 shadow-2xl hover:shadow-red-500/10 transition-all duration-300 group">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-800 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Books</h3>
                            <p class="text-gray-400 mb-4">Revolutionary literature</p>
                            <button class="inline-block bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                View Books
                            </button>
                        </div>
                    </div>

                    <!-- Songs with Submission Feature -->
                    <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-2xl p-6 shadow-2xl hover:shadow-red-500/10 transition-all duration-300 group">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-800 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Songs</h3>
                            <p class="text-gray-400 mb-4">Revolutionary music</p>
                            <div class="space-y-3">
                                <button onclick="openSongModal()" class="inline-block bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    Submit Song
                                </button>
                                <button onclick="openSongsListModal()" class="inline-block bg-gradient-to-r from-gray-600 to-gray-800 hover:from-gray-700 hover:to-gray-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    Listen Songs
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Documentaries with Submission Feature -->
                    <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-2xl p-6 shadow-2xl hover:shadow-red-500/10 transition-all duration-300 group">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-800 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Documentaries</h3>
                            <p class="text-gray-400 mb-4">Revolutionary films</p>
                            <div class="space-y-3">
                                <button onclick="openDocumentaryModal()" class="inline-block bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    Submit Documentary
                                </button>
                                <button onclick="openDocumentariesListModal()" class="inline-block bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                    Watch Documentaries
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Articles -->
                    <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-2xl p-6 shadow-2xl hover:shadow-red-500/10 transition-all duration-300 group">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-800 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-2">Articles</h3>
                            <p class="text-gray-400 mb-4">Revolutionary writings</p>
                            <button class="inline-block bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                                Read Articles
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="mt-8">
                    <div class="bg-gray-900/80 backdrop-blur-md border border-gray-700/50 rounded-2xl p-6 shadow-2xl">
                        <h3 class="text-xl font-bold text-white mb-4">Recent Activity</h3>
                        <div id="recentActivity" class="space-y-4">
                            <!-- Activities will be loaded here dynamically -->
                            <div class="text-center text-gray-400 py-8">
                                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-red-500 mx-auto mb-4"></div>
                                Loading activities...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Song Submission Modal -->
        <div id="songModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
            <div class="bg-gray-900/95 backdrop-blur-md border border-gray-700/50 rounded-2xl p-8 max-w-md w-full mx-4 shadow-2xl">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-white">Submit Revolutionary Song</h3>
                    <button onclick="closeSongModal()" class="text-gray-400 hover:text-white text-2xl">&times;</button>
                </div>
                
                <form id="songForm" class="space-y-4">
                    <div>
                        <label class="block text-gray-200 font-semibold mb-2">Song Title</label>
                        <input type="text" name="title" id="songTitle" class="w-full bg-gray-800/60 border border-gray-600 text-white rounded-lg px-4 py-3 focus:border-red-500 focus:ring-red-500" placeholder="Enter song title" required>
                    </div>
                    
                    <div>
                        <label class="block text-gray-200 font-semibold mb-2">Singer Name</label>
                        <input type="text" name="singer" id="songSinger" class="w-full bg-gray-800/60 border border-gray-600 text-white rounded-lg px-4 py-3 focus:border-red-500 focus:ring-red-500" placeholder="Enter singer name" required>
                    </div>
                    
                    <div>
                        <label class="block text-gray-200 font-semibold mb-2">YouTube Link</label>
                        <input type="url" name="youtube_link" id="songLink" class="w-full bg-gray-800/60 border border-gray-600 text-white rounded-lg px-4 py-3 focus:border-red-500 focus:ring-red-500" placeholder="https://youtube.com/watch?v=..." required>
                    </div>
                    
                    <div class="flex space-x-3 pt-4">
                        <button type="submit" class="flex-1 bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                            Submit Song
                        </button>
                        <button type="button" onclick="closeSongModal()" class="flex-1 bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Songs List Modal -->
        <div id="songsListModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
            <div class="bg-gray-900/95 backdrop-blur-md border border-gray-700/50 rounded-2xl p-8 max-w-4xl w-full mx-4 shadow-2xl max-h-[80vh] overflow-y-auto">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-white">Revolutionary Songs</h3>
                    <button onclick="closeSongsListModal()" class="text-gray-400 hover:text-white text-2xl">&times;</button>
                </div>
                
                <div id="songsList" class="space-y-4">
                    <!-- Songs will be loaded here dynamically -->
                    <div class="text-center text-gray-400 py-8">
                        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-red-500 mx-auto mb-4"></div>
                        Loading songs...
                    </div>
                </div>
            </div>
        </div>

        <!-- Documentary Submission Modal -->
        <div id="documentaryModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
            <div class="bg-gray-900/95 backdrop-blur-md border border-gray-700/50 rounded-2xl p-8 max-w-md w-full mx-4 shadow-2xl">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-white">Submit Revolutionary Documentary</h3>
                    <button onclick="closeDocumentaryModal()" class="text-gray-400 hover:text-white text-2xl">&times;</button>
                </div>
                
                <form id="documentaryForm" class="space-y-4">
                    <div>
                        <label class="block text-gray-200 font-semibold mb-2">Documentary Title</label>
                        <input type="text" name="title" id="documentaryTitle" class="w-full bg-gray-800/60 border border-gray-600 text-white rounded-lg px-4 py-3 focus:border-red-500 focus:ring-red-500" placeholder="Enter documentary title" required>
                    </div>
                    
                    <div>
                        <label class="block text-gray-200 font-semibold mb-2">Made By</label>
                        <input type="text" name="made_by" id="documentaryMaker" class="w-full bg-gray-800/60 border border-gray-600 text-white rounded-lg px-4 py-3 focus:border-red-500 focus:ring-red-500" placeholder="Enter filmmaker name" required>
                    </div>
                    
                    <div>
                        <label class="block text-gray-200 font-semibold mb-2">YouTube Link</label>
                        <input type="url" name="youtube_link" id="documentaryLink" class="w-full bg-gray-800/60 border border-gray-600 text-white rounded-lg px-4 py-3 focus:border-red-500 focus:ring-red-500" placeholder="https://youtube.com/watch?v=..." required>
                    </div>
                    
                    <div class="flex space-x-3 pt-4">
                        <button type="submit" class="flex-1 bg-gradient-to-r from-red-600 to-red-800 hover:from-red-700 hover:to-red-900 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                            Submit Documentary
                        </button>
                        <button type="button" onclick="closeDocumentaryModal()" class="flex-1 bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 px-4 rounded-lg transition-all duration-300">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Documentaries List Modal -->
        <div id="documentariesListModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
            <div class="bg-gray-900/95 backdrop-blur-md border border-gray-700/50 rounded-2xl p-8 max-w-4xl w-full mx-4 shadow-2xl max-h-[80vh] overflow-y-auto">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-white">Revolutionary Documentaries</h3>
                    <button onclick="closeDocumentariesListModal()" class="text-gray-400 hover:text-white text-2xl">&times;</button>
                </div>
                
                <div id="documentariesList" class="space-y-4">
                    <!-- Documentaries will be loaded here dynamically -->
                    <div class="text-center text-gray-400 py-8">
                        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-red-500 mx-auto mb-4"></div>
                        Loading documentaries...
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative elements -->
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-red-900/20 to-transparent"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-red-600/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-800/10 rounded-full blur-3xl"></div>
    </div>

    <script>
        // Load activities when page loads
        document.addEventListener('DOMContentLoaded', function() {
            loadActivities();
        });

        function openSongModal() {
            document.getElementById('songModal').classList.remove('hidden');
        }
        
        function closeSongModal() {
            document.getElementById('songModal').classList.add('hidden');
            // Reset form
            document.getElementById('songForm').reset();
        }

        function openSongsListModal() {
            document.getElementById('songsListModal').classList.remove('hidden');
            loadSongs();
        }
        
        function closeSongsListModal() {
            document.getElementById('songsListModal').classList.add('hidden');
        }

        function openDocumentaryModal() {
            document.getElementById('documentaryModal').classList.remove('hidden');
        }
        
        function closeDocumentaryModal() {
            document.getElementById('documentaryModal').classList.add('hidden');
            // Reset form
            document.getElementById('documentaryForm').reset();
        }

        function openDocumentariesListModal() {
            document.getElementById('documentariesListModal').classList.remove('hidden');
            loadDocumentaries();
        }
        
        function closeDocumentariesListModal() {
            document.getElementById('documentariesListModal').classList.add('hidden');
        }

        function loadActivities() {
            const activityContainer = document.getElementById('recentActivity');
            
            fetch('/activities')
                .then(response => response.json())
                .then(data => {
                    if (data.activities && data.activities.length > 0) {
                        activityContainer.innerHTML = data.activities.map(activity => {
                            const timeAgo = getTimeAgo(activity.created_at);
                            let activityText = activity.description;
                            
                            // Add specific details for song submissions
                            if (activity.type === 'song_submitted' && activity.metadata) {
                                activityText = `Submitted song "${activity.metadata.song_title}" by ${activity.metadata.singer}`;
                            }
                            // Add specific details for documentary submissions
                            if (activity.type === 'documentary_submitted' && activity.metadata) {
                                activityText = `Submitted documentary "${activity.metadata.documentary_title}" by ${activity.metadata.made_by}`;
                            }
                            
                            return `
                                <div class="flex items-center p-3 bg-gray-800/50 rounded-lg">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
                                    <span class="text-gray-300">${activityText}</span>
                                    <span class="ml-auto text-gray-500 text-sm">${timeAgo}</span>
                                </div>
                            `;
                        }).join('');
                    } else {
                        activityContainer.innerHTML = `
                            <div class="text-center text-gray-400 py-8">
                                <p class="text-lg mb-2">No recent activity</p>
                                <p class="text-sm">Start by submitting a song or exploring the platform!</p>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error loading activities:', error);
                    activityContainer.innerHTML = `
                        <div class="text-center text-red-400 py-8">
                            <p class="text-lg mb-2">Error loading activities</p>
                            <p class="text-sm">Please try again later</p>
                        </div>
                    `;
                });
        }

        function getTimeAgo(dateString) {
            const now = new Date();
            const activityDate = new Date(dateString);
            const diffInSeconds = Math.floor((now - activityDate) / 1000);
            
            if (diffInSeconds < 60) {
                return 'Just now';
            } else if (diffInSeconds < 3600) {
                const minutes = Math.floor(diffInSeconds / 60);
                return `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
            } else if (diffInSeconds < 86400) {
                const hours = Math.floor(diffInSeconds / 3600);
                return `${hours} hour${hours > 1 ? 's' : ''} ago`;
            } else {
                const days = Math.floor(diffInSeconds / 86400);
                return `${days} day${days > 1 ? 's' : ''} ago`;
            }
        }

        function loadSongs() {
            const songsList = document.getElementById('songsList');
            songsList.innerHTML = `
                <div class="text-center text-gray-400 py-8">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-red-500 mx-auto mb-4"></div>
                    Loading songs...
                </div>
            `;

            fetch('/songs')
                .then(response => response.json())
                .then(data => {
                    if (data.songs && data.songs.length > 0) {
                        songsList.innerHTML = data.songs.map(song => `
                            <div class="bg-gray-800/50 rounded-lg p-4 hover:bg-gray-700/50 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-white font-semibold text-lg">${song.title}</h4>
                                        <p class="text-gray-300">${song.singer}</p>
                                        <p class="text-gray-500 text-sm">Submitted by ${song.user ? song.user.name : 'Anonymous'}</p>
                                    </div>
                                    <a href="${song.youtube_link}" target="_blank" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                        </svg>
                                        Watch
                                    </a>
                                </div>
                            </div>
                        `).join('');
                    } else {
                        songsList.innerHTML = `
                            <div class="text-center text-gray-400 py-8">
                                <p class="text-lg mb-2">No songs submitted yet</p>
                                <p class="text-sm">Be the first to submit a revolutionary song!</p>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error loading songs:', error);
                    songsList.innerHTML = `
                        <div class="text-center text-red-400 py-8">
                            <p class="text-lg mb-2">Error loading songs</p>
                            <p class="text-sm">Please try again later</p>
                        </div>
                    `;
                });
        }

        // Handle song form submission
        document.getElementById('songForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            submitButton.textContent = 'Submitting...';
            submitButton.disabled = true;

            fetch('/songs', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    title: formData.get('title'),
                    singer: formData.get('singer'),
                    youtube_link: formData.get('youtube_link')
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Song submitted successfully!');
                    closeSongModal();
                    // Refresh activities and songs list
                    loadActivities();
                    if (!document.getElementById('songsListModal').classList.contains('hidden')) {
                        loadSongs();
                    }
                } else {
                    alert('Error submitting song. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error submitting song. Please try again.');
            })
            .finally(() => {
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            });
        });

        function loadDocumentaries() {
            const documentariesList = document.getElementById('documentariesList');
            documentariesList.innerHTML = `
                <div class="text-center text-gray-400 py-8">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-red-500 mx-auto mb-4"></div>
                    Loading documentaries...
                </div>
            `;

            fetch('/documentaries')
                .then(response => response.json())
                .then(data => {
                    if (data.documentaries && data.documentaries.length > 0) {
                        documentariesList.innerHTML = data.documentaries.map(documentary => `
                            <div class="bg-gray-800/50 rounded-lg p-4 hover:bg-gray-700/50 transition-colors">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-white font-semibold text-lg">${documentary.title}</h4>
                                        <p class="text-gray-300">Made by ${documentary.made_by}</p>
                                        <p class="text-gray-500 text-sm">Submitted by ${documentary.user ? documentary.user.name : 'Anonymous'}</p>
                                    </div>
                                    <a href="${documentary.youtube_link}" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                        </svg>
                                        Watch
                                    </a>
                                </div>
                            </div>
                        `).join('');
                    } else {
                        documentariesList.innerHTML = `
                            <div class="text-center text-gray-400 py-8">
                                <p class="text-lg mb-2">No documentaries submitted yet</p>
                                <p class="text-sm">Be the first to submit a revolutionary documentary!</p>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error loading documentaries:', error);
                    documentariesList.innerHTML = `
                        <div class="text-center text-red-400 py-8">
                            <p class="text-lg mb-2">Error loading documentaries</p>
                            <p class="text-sm">Please try again later</p>
                        </div>
                    `;
                });
        }

        // Handle documentary form submission
        document.getElementById('documentaryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            submitButton.textContent = 'Submitting...';
            submitButton.disabled = true;

            fetch('/documentaries', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    title: formData.get('title'),
                    made_by: formData.get('made_by'),
                    youtube_link: formData.get('youtube_link')
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Documentary submitted successfully!');
                    closeDocumentaryModal();
                    // Refresh activities and documentaries list
                    loadActivities();
                    if (!document.getElementById('documentariesListModal').classList.contains('hidden')) {
                        loadDocumentaries();
                    }
                } else {
                    alert('Error submitting documentary. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error submitting documentary. Please try again.');
            })
            .finally(() => {
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            });
        });
        
        // Close modals when clicking outside
        document.getElementById('songModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSongModal();
            }
        });

        document.getElementById('songsListModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSongsListModal();
            }
        });
    </script>
</x-app-layout>
