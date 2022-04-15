//
PS C:\Users\PARHAM\Desktop\Parham> git clone https://github.com/idin-khayami/git-exercises
Cloning into 'git-exercises'...
remote: Enumerating objects: 9, done.
remote: Counting objects: 100% (9/9), done.
remote: Total 9 (delta 1), reused 8 (delta 0), pack-reused 0
Resolving deltas: 100% (1/1), done.

//

PS C:\Users\PARHAM\Desktop\Parham> cd git-exercises
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git checkout question2
Switched to a new branch 'question2'
Branch 'question2' set up to track remote branch 'question2' from 'origin'.

//

PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git ls-files -s
100644 980a0d5f19a64b4b30a87d4206aade58726b60e3 0       hello.txt
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git add -p 
diff --git a/hello.txt b/hello.txt
index 980a0d5..de6bb03 100644
--- a/hello.txt
@@ -1 +1 @@
+Hello World Parham!
(1/1) Stage this hunk [y,n,q,a,d,e,?]? y

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git status
On branch question2
Your branch is up to date with 'origin/question2'.

Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        modified:   hello.txt

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git reset hello.txt
M       hello.txt
On branch question2
Your branch is up to date with 'origin/question2'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   hello.txt

no changes added to commit (use "git add" and/or "git commit -a")
Saved working directory and index state WIP on question2: 84f33bb initial commit

Changes not staged for commit:
  (use "git restore <file>..." to discard changes in working directory)
        modified:   hello.txt

no changes added to commit (use "git add" and/or "git commit -a")

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git stash -m "changed in hello file"
Saved working directory and index state On question2: changed in hello file


//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git stash apply
On branch question2
Your branch is up to date with 'origin/question2'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   hello.txt

no changes added to commit (use "git add" and/or "git commit -a")

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git status
        modified:   hello.txt

no changes added to commit (use "git add" and/or "git commit -a")

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git stash -m "changed in hello file"
Saved working directory and index state On question2: changed in hello file

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git stash apply
On branch question2
Your branch is up to date with 'origin/question2'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   hello.txt

no changes added to commit (use "git add" and/or "git commit -a")

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> git status
On branch question2
Your branch is up to date with 'origin/question2'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   hello.txt

no changes added to commit (use "git add" and/or "git commit -a")

//
PS C:\Users\PARHAM\Desktop\Parham\git-exercises> cat hello.txt
Hello World Parham!
//
