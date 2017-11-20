#!/bin/bash

# デプロイしたいディレクトリの場所
deploy_path=/home/kusanagi/html/DocumentRoot/wp-content/themes/

# デプロイするプロジェクトの名前
proj_name=forestone-corp

# リモートリポジトリのURL
remote_path=git@github.com:chibataku0815/forestone-corp.git

# デプロイするブランチ
branch=master

# 本番環境へのSSHログイン情報（ユーザ名@ホスト名）
host=root@133.130.101.97

#############ここまで#############

# yes/noで応答
function confirm () {
    echo -n $1
    read answer
    case `echo $answer | tr y Y` in
        Y*)
        ;;
        *)
            echo "Bye."
            exit
        ;;
    esac
}

# 本当にデプロイするか確認
confirm "Is it OK to deploy? [y/n]"

# -AでSSH鍵をサーバーでも利用
# StrictHostKeyCheckingで初SSH接続時の[yes/no]を無視
ssh -A -o StrictHostKeyChecking=no ${host} "

    cd ${deploy_path}

    # プロジェクトのディレクトリがあるか確認
    # なければclone、あればpullをおこなう
    if [ ! -e ${proj_name} ]; then
        echo 'cloning success!'
    else
        cd ${proj_name}
        # pullもしくはfetch＆reset --hardを使う
        # 競合を起こさないよう、強制的に最新のリモートリポジトリに合わせる
        git fetch origin
        git reset --hard origin/master
        git pull origin ${branch}
        echo 'deployment success!'
    fi
"
