PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git merge question3
Updating 84f33bb..19f9dae
Fast-forward
 hello.txt | 1 +
 1 file changed, 1 insertion(+)
 PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git log
commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (HEAD -> question4, tag: v1, tag: annotated_tag, origin/question3, question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, question2, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430
 initial commit

PS C:\Users\PARHAM\Desktop\Parham\git-exercises>
                                                 git reset --hard HEAD^
HEAD is now at 84f33bb initial commit
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git merge --no-ff question3
Merge made by the 'recursive' strategy.
 hello.txt | 1 +
 1 file changed, 1 insertion(+)


PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git log
commit b26f4951c6216f0106e756a98fc835d600a31bcb (HEAD -> question4)
Merge: 84f33bb 19f9dae
Author: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Fri Apr 15 00:13:12 2022 +0430

    Merge branch 'question3' into question4

commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (tag: v1, tag: annotated_tag, origin/question3, question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, question2, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit
//
در حالت اول که fast forwarding
روشن بود .تمام کامیت هایی که بعد initial بودن به آن مرج شدند 
در واقع اگر هدی که الان ما در ان هستیم .جد هد یک برنچ باشد این اتفاق میوفتد.
، در حالت دوم علاوه بر کامیت های قبلی ، کامیت مربوط به مرج کردن هم نمایش داده شد
//


 PS C:\Users\PARHAM\Desktop\Parham\git-exercises>
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git checkout question5
Switched to a new branch 'question5'
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git add hello.txt     
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git commit -m "add hi to heelo file"
[question5 5401537] add hi to heelo file

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git merge question4
Auto-merging hello.txt
CONFLICT (content): Merge conflict in hello.txt
Automatic merge failed; fix conflicts and then commit the result.


PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git config rerere.enabled true
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git config --get rerere.enabled     
true

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git add hello.txt
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git commit -m "merge fixes"

git reset HEAD^ --hard
HEAD is now at 84f33bb add update for question 5

git merge question4



// new conflict

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git add hello.txt
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git commit -m "add Q2 to file" 
[question4 f29d5cc] add Q2 to file
 1 file changed, 1 insertion(+), 1 deletion(-)
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> cat hello.txt
Hello World Q4!


PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git checkout question2
Switched to branch 'question2'
Your branch is up to date with 'origin/question2'.
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> cat hello.txt
Hello World!
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git add hello.txt
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git commit -m "add Q4 to file" 
[question2 fb954f7] add Q4 to file
 1 file changed, 1 insertion(+), 1 deletion(-)
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> cat hello.txt
Hello World Q2!


PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git merge question4
Auto-merging hello.txt
CONFLICT (content): Merge conflict in hello.txt
Recorded preimage for 'hello.txt'

PS C:\Users\PARHAM\Desktop\Parham\git-exercises>  git config rerere.enabled true 
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git rerere

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git reset --hard HEAD^
HEAD is now at 84f33bb initial commit

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git merge question4
Auto-merging hello.txt
CONFLICT (content): Merge conflict in hello.txt
Resolved 'hello.txt' using previous resolution.
Automatic merge failed; fix conflicts and then commit the result.

//با توجه به سرچ های متعدد و کارکرد این کامند متوجه شدم  rerere می اید تغییرات و راه حلی که
برای حل conflit انجام شده است را ذخیره میکند 
و در دفعه بعدی اگر  conflict مشابهی را مشاهده نماید 
انرا با استفاده از روشی که قبلا سیو کرده حل میکند به صورت اتوماتیک