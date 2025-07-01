FROM node:20-alpine

# tiniを追加してPID 1問題を回避
RUN apk add --no-cache tini
ENTRYPOINT ["/sbin/tini", "--"]

WORKDIR /app

# package.jsonとpackage-lock.jsonをコピー
COPY package*.json ./

# 依存関係のインストール
RUN npm ci

EXPOSE 5173

CMD ["npm", "run", "dev"]
