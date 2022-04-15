Windows PowerShell
Copyright (C) Microsoft Corporation. All rights reserved.

Try the new cross-platform PowerShell https://aka.ms/pscore6
//
PS C:\Users\PARHAM\Desktop\Parham> git init
Reinitialized existing Git repository in C:/Users/PARHAM/Desktop/Parham/.git/
//

PS C:\Users\PARHAM\Desktop\Parham> git add test.txt
//
PS C:\Users\PARHAM\Desktop\Parham> git commit -m "commit test file"
[master (root-commit) 1d4ac4f] commit test file
 1 file changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 test.txt
//

PS C:\Users\PARHAM\Desktop\Parham> git status
On branch master
Untracked files:
  (use "git add <file>..." to include in what will be committed)
        Parham_Mokhtari.md

nothing added to commit but untracked files present (use "git add" to track)

//
PS C:\Users\PARHAM\Desktop\Parham> tree ./.git

Folder PATH listing for volume SSD
Volume serial number is 845C-CFD4
C:\USERS\PARHAM\DESKTOP\PARHAM\.GIT
├───hooks
├───info
├───logs
│   └───refs
│       └───heads
├───objects
│   ├───1d
│   ├───58
│   ├───5e
│   ├───e6
│   ├───info
│   └───pack
└───refs
    ├───heads
    └───tags


//
PS C:\Users\PARHAM\Desktop\Parham> git status
fatal: not a git repository (or any of the parent directories): .git

//
PS C:\Users\PARHAM\Desktop\Parham> git init  
Initialized empty Git repository in C:/Users/PARHAM/Desktop/Parham/.git/

//
PS C:\Users\PARHAM\Desktop\Parham> git add test.txt
PS C:\Users\PARHAM\Desktop\Parham> git commit -m "commit test file"
[master (root-commit) ed23f74] commit test file
 1 file changed, 1 insertion(+)

//
PS C:\Users\PARHAM\Desktop\Parham> git status
Untracked files:
        Parham_Mokhtari.md

nothing added to commit but untracked files present (use "git add" to track)

//
PS C:\Users\PARHAM\Desktop\Parham> tree ./.git/objects
Folder PATH listing for volume SSD
C:\USERS\PARHAM\DESKTOP\PARHAM\.GIT\OBJECTS
├───3b
├───58
├───5e
├───e6
├───ed
├───info
└───pack

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 1d4ac4f6ad225a44f88561fae6ad115b287621eb
commit

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 1d4ac4f6ad225a44f88561fae6ad115b287621eb

tree 5efb9bc29c482e023e40e0a2b3b7e49cec842034
author Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958783 +0430
committer Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958783 +0430

commit test file

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 3b0cfaa1023757c7a552d4a9f1c8c4eaea50e498
blob

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 3b0cfaa1023757c7a552d4a9f1c8c4eaea50e498
hello parham

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 58f202f6a58c610b7c3dd0c28137c85daa9e22ff
tree 5efb9bc29c482e023e40e0a2b3b7e49cec842034
author Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958099 +0430
committer Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958099 +0430

commit test file

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 58f202f6a58c610b7c3dd0c28137c85daa9e22ff
commit
//

PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 50fa11ac1fe10a641c5dca31dfea3ab500d4f88c
tree

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 50fa11ac1fe10a641c5dca31dfea3ab500d4f88c
├───5e
├───e6
├───ed
├───info
└───pack

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 1d4ac4f6ad225a44f88561fae6ad115b287621eb
commit
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 1d4ac4f6ad225a44f88561fae6ad115b287621eb
tree 5efb9bc29c482e023e40e0a2b3b7e49cec842034
author Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958783 +0430
committer Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958783 +0430

commit test file

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 3b0cfaa1023757c7a552d4a9f1c8c4eaea50e498
blob
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 3b0cfaa1023757c7a552d4a9f1c8c4eaea50e498
hello parham


//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 58f202f6a58c610b7c3dd0c28137c85daa9e22ff
tree 5efb9bc29c482e023e40e0a2b3b7e49cec842034
author Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958099 +0430
committer Parhammokhtari <parham.mokhtari2000@gmail.com> 1649958099 +0430

commit test file
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 58f202f6a58c610b7c3dd0c28137c85daa9e22ff
commit

//
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 50fa11ac1fe10a641c5dca31dfea3ab500d4f88c
tree
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 50fa11ac1fe10a641c5dca31dfea3ab500d4f88c
100644 blob 3b0cfaa1023757c7a552d4a9f1c8c4eaea50e498    test.txt


PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p 5efb9bc29c482e023e40e0a2b3b7e49cec842034
100644 blob e69de29bb2d1d6434b8b29ae775ad8c2e48c5391    test.txt
PS C:\Users\PARHAM\Desktop\Parham>
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t e69de29bb2d1d6434b8b29ae775ad8c2e48c5391
blob
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p e69de29bb2d1d6434b8b29ae775ad8c2e48c5391
PS C:\Users\PARHAM\Desktop\Parham>
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t 23f742763d9d97c9b58576503fbfdb17fbd7c4  
fatal: Not a valid object name 23f742763d9d97c9b58576503fbfdb17fbd7c4
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -t ed23f742763d9d97c9b58576503fbfdb17fbd7c4
commit
PS C:\Users\PARHAM\Desktop\Parham> git cat-file -p ed23f742763d9d97c9b58576503fbfdb17fbd7c4
tree 50fa11ac1fe10a641c5dca31dfea3ab500d4f88c
author Parhammokhtari <parham.mokhtari2000@gmail.com> 1649960555 +0430
committer Parhammokhtari <parham.mokhtari2000@gmail.com> 1649960555 +0430

commit test file
//

PS C:\Users\PARHAM\Desktop\Parham> cat .git/HEAD
ref: refs/heads/master
PS C:\Users\PARHAM\Desktop\Parham> cat .git/refs/heads/master
ed23f742763d9d97c9b58576503fbfdb17fbd7c4
PS C:\Users\PARHAM\Desktop\Parham> 