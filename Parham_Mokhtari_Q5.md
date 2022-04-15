C:\Users\PARHAM\Desktop\Parham\git-exercises>git add hello.txt

C:\Users\PARHAM\Desktop\Parham\git-exercises>git commit -m "changing in Q5 in hello file. add hi parham"
[question5 e5a0ab2] changing in Q5 in hello file. add hi parham
 1 file changed, 4 insertions(+), 1 deletion(-)
//

//
C:\Users\PARHAM\Desktop\Parham\git-exercises>git log
commit e5a0ab2b3b06633b69c6ff64db795700ae6d858d (HEAD -> question5)
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:32:55 2022 +0430

    changing in Q5 in hello file. add hi parham
    changing in Q5 in hello file. add hi parham

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430

    add update for question 5

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, question2, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit

//


C:\Users\PARHAM\Desktop\Parham\git-exercises>git add hello_new.txt

C:\Users\PARHAM\Desktop\Parham\git-exercises>git commit hello_new.txt -m "renamed file"
[question5 f0b84cd] renamed file
 1 file changed, 5 insertions(+)
 create mode 100644 hello_new.txt
//


//
C:\Users\PARHAM\Desktop\Parham\git-exercises>git log --name-status --follow hello_new.txt
commit f0b84cd8af01b0ebed602ce2a486cc9a9c5ed680 (HEAD -> question5)
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:35:15 2022 +0430

    renamed file

C100    hello.txt       hello_new.txt

commit e5a0ab2b3b06633b69c6ff64db795700ae6d858d
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:32:55 2022 +0430

    changing in Q5 in hello file. add hi parham

M       hello.txt

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430

:...skipping...
commit f0b84cd8af01b0ebed602ce2a486cc9a9c5ed680 (HEAD -> question5)
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:35:15 2022 +0430

    renamed file

C100    hello.txt       hello_new.txt

commit e5a0ab2b3b06633b69c6ff64db795700ae6d858d
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:32:55 2022 +0430

    changing in Q5 in hello file. add hi parham

M       hello.txt

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430
 add update for question 5

M       hello.txt

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, question2, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit

A       hello.txt
//


//
C:\Users\PARHAM\Desktop\Parham\git-exercises>git log --grep "file"
commit f0b84cd8af01b0ebed602ce2a486cc9a9c5ed680 (HEAD -> question5)
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:35:15 2022 +0430

    renamed file

commit e5a0ab2b3b06633b69c6ff64db795700ae6d858d
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:32:55 2022 +0430

    changing in Q5 in hello file. add hi parham
//


//
C:\Users\PARHAM\Desktop\Parham\git-exercises>git log  --diff-filter=RM
commit e5a0ab2b3b06633b69c6ff64db795700ae6d858d
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:32:55 2022 +0430

    changing in Q5 in hello file. add hi parham

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430

    add update for question 5

//

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git show e5a0ab2b3b06633b69c6ff64db795700ae6d858d
commit e5a0ab2b3b06633b69c6ff64db795700ae6d858d
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 01:32:55 2022 +0430

    changing in Q5 in hello file. add hi parham

diff --git a/hello.txt b/hello.txt
index 47ad6c9..c957d0b 100644
--- a/hello.txt
+++ b/hello.txt
@@ -1,2 +1,5 @@
 Hola Mundo!
-This is a test of the emergency git-casting system.
\ No newline at end of file
+This is a test of the emergency git-casting system.
+
+
+hi parham
\ No newline at end of file

//


    C:\Users\PARHAM\Desktop\Parham\git-exercises>git branch --merged
  master
  question2
* question5

C:\Users\PARHAM\Desktop\Parham\git-exercises>git branch --no-merged
  question3
  question4