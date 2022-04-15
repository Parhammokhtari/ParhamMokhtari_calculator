PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git reset HEAD --hard
>>
HEAD is now at 84f33bb initial commit
//


PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git status
On branch question2
Your branch is up to date with 'origin/question2'.

nothing to commit, working tree clean

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> cat hello.txt
Hello World!

//

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git checkout question3
Switched to a new branch 'question3'
Branch 'question3' set up to track remote branch 'question3' from 'origin'.
 
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git cat-file -t 19f9daed9feb5c5e5ee8149f9677505af7bec379
commit

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git cat-file -p 19f9daed9feb5c5e5ee8149f9677505af7bec379 
tree cbcdf5dda7853d595fe0b1942cb0d1d72eb910f3
parent 84f33bb71faa62192b2362ad0ef66fb7d972e447
author Idin Khayami <idin.khanoom.khayami@gmail.com> 1649332870 +0430
committer Idin Khayami <idin.khanoom.khayami@gmail.com> 1649332870 +0430

add update for question 3


//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git show-ref
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/heads/master
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/heads/question2
19f9daed9feb5c5e5ee8149f9677505af7bec379 refs/heads/question3
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/HEAD
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/master
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/question2
19f9daed9feb5c5e5ee8149f9677505af7bec379 refs/remotes/origin/question3
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/question4
87cba9c704760c7922a5a07ad3cbe7d6ccbd245e refs/remotes/origin/question5
618917eeed92398086dc75ac2fbaa766512dc6bf refs/stash

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git tag v1  
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git tag -l --points-at 19f9daed9feb5c5e5ee8149f9677505af7bec379
>>
v1
//

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git tag -a annotated_tag -m "this tag is annotated tag"
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git show annotated_tag
tag annotated_tag
Tagger: Parhammokhtari <parham.mokhtari2000@gmail.com>
Date:   Thu Apr 14 23:38:04 2022 +0430

this tag is annotated tag

commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (HEAD -> question3, tag: v1, tag: annotated_tag, origin/question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

diff --git a/hello.txt b/hello.txt
index 980a0d5..b31a35b 100644
--- a/hello.txt
+++ b/hello.txt
@@ -1 +1,2 @@
 Hello World!
+This is a test of the emergency git-casting system.
//


//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git log
commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (HEAD -> question3, tag: v1, tag: annotated_tag, origin/question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, question2, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
    initial commit
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git checkout 84f33bb71faa62192b2362ad0ef66fb7d972e447
Note: switching to '84f33bb71faa62192b2362ad0ef66fb7d972e447'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by switching back to a branch.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -c with the switch command. Example:

  git switch -c <new-branch-name>

Or undo this operation with:

  git switch -

Turn off this advice by setting config variable advice.detachedHead to false

HEAD is now at 84f33bb initial commit

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> cat  ./.git/head
84f33bb71faa62192b2362ad0ef66fb7d972e447
//



//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git add hello.txt
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git commit -m "parham added to hello file"
[detached HEAD 276c44a] parham added to hello file
 1 file changed, 1 insertion(+), 1 deletion(-)

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git checkout question4
Warning: you are leaving 1 commit behind, not connected to
any of your branches:

  276c44a parham added to hello file

If you want to keep it by creating a new branch, this may be a good time
to do so with:

 git branch <new-branch-name> 276c44a

Switched to a new branch 'question4'
Branch 'question4' set up to track remote branch 'question4' from 'origin'.