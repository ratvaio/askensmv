                            function playvideo(video, title) {
                                document.getElementById("currentvideo").src = video;
                                document.getElementById("videotitle").innerHTML = "<h1>" + title + "<h1>";
                                document.title = title;
                            }