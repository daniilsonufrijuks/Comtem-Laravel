import { viteCommonjs } from '@originjs/vite-plugin-commonjs';
import vue from '@vitejs/plugin-vue';
const path = require('path');

export default {
    base: './',
    plugins: [viteCommonjs(), vue()],
    root: path.resolve(__dirname, 'src'),
    server: {
        port: 8080,
        hot: true,
    },
    build: {
        outDir: '../dist',
        emptyOutDir: true,
        rollupOptions: {
            external: ['fsevents'], // Add fsevents to the external list
            output: {
                assetFileNames: 'assets/[name].[ext]',
                chunkFileNames: 'assets/[name].[ext]',
                entryFileNames: 'assets/[name].js',
            },
        },
    },
};
